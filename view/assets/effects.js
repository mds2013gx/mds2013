$(window).load(function() {

		var topoChartData = {
			labels : ["","","","","","",""],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
		};
		
		var barChartData = {
			labels : ["2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					<?php echo "data : [65,59,90,81,56,55,40,81,56,55,40]" ?>
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					<?php echo "data : [28,48,40,19,96,27,100,19,96,27,100]" ?>
				}
			]
			
		};		
		var pieChartData = [
				{
					<?php echo "value: 30," ?>
					color:"#F38630"
				},
				{
					<?php echo "value: 50," ?>
					color : "#E0E4CC"
				},
				{
					<?php echo "value: 100," ?>
					color : "#69D2E7"
				}
			
		];
		var doughnutChartData = [
				{
					<?php echo "value: 30," ?>
					color:"#F7464A"
				},
				{
					<?php echo "value: 50," ?>
					color : "#46BFBD"
				},
				{
					<?php echo "value: 100," ?>
					color : "#FDB45C"
				},
				{
					<?php echo "value: 40," ?>
					color : "#949FB1"
				},
				{
					<?php echo "value: 120," ?>
					color : "#4D5360"
				}
			
		];
				
		var globalGraphSettings = {animation : Modernizr.canvas};
		
		setTopoChart();
		
		function setTopoChart(){		
			var ctx = document.getElementById("topoChart").getContext("2d");
			new Chart(ctx).Line(topoChartData,{animation: Modernizr.canvas, scaleShowLabels : false, scaleFontColor : "#767C8D"});
		};
		function showBarChart(){
			var ctx = document.getElementById("barChartCanvas").getContext("2d");
			new Chart(ctx).Bar(barChartData,globalGraphSettings);
		};
		function showPieChart(){
			var ctx = document.getElementById("pieChartCanvas").getContext("2d");
			new Chart(ctx).Pie(pieChartData,globalGraphSettings);
		};
		function showDoughnutChart(){
			var ctx = document.getElementById("doughnutChartCanvas").getContext("2d");
			new Chart(ctx).Doughnut(doughnutChartData,globalGraphSettings);
		};
		
		var graphInitDelay = 300;
		
		//Set up each of the inview events here.
		$("#topoChart").on("inview",function(){
			var $this = $(this);
			$this.removeClass("hidden").off("inview");
			setTimeout(showHeaderChart,graphInitDelay);
		});
		$("#barChart").on("inview",function(){
			var $this = $(this);
			$this.removeClass("hidden").off("inview");
			setTimeout(showBarChart,graphInitDelay);
		});
		$("#pieChart").on("inview",function(){
			var $this = $(this);
			$this.removeClass("hidden").off("inview");
			setTimeout(showPieChart,graphInitDelay);			
		});
		$("#doughnutChart").on("inview",function(){
			var $this = $(this);
			$this.removeClass("hidden").off("inview");
			setTimeout(showDoughnutChart,graphInitDelay);			
		});
		
	});
	
	/**
	 * author Christopher Blum
	 *    - based on the idea of Remy Sharp, http://remysharp.com/2009/01/26/element-in-view-event-plugin/
	 *    - forked from http://github.com/zuk/jquery.inview/
	 */
	(function ($) {
	  var inviewObjects = {}, viewportSize, viewportOffset,
	      d = document, w = window, documentElement = d.documentElement, expando = $.expando;
	
	  $.event.special.inview = {
	    add: function(data) {
	      inviewObjects[data.guid + "-" + this[expando]] = { data: data, $element: $(this) };
	    },
	
	    remove: function(data) {
	      try { delete inviewObjects[data.guid + "-" + this[expando]]; } catch(e) {}
	    }
	  };
	
	  function getViewportSize() {
	    var mode, domObject, size = { height: w.innerHeight, width: w.innerWidth };
	
	    // if this is correct then return it. iPad has compat Mode, so will
	    // go into check clientHeight/clientWidth (which has the wrong value).
	    if (!size.height) {
	      mode = d.compatMode;
	      if (mode || !$.support.boxModel) { // IE, Gecko
	        domObject = mode === 'CSS1Compat' ?
	          documentElement : // Standards
	          d.body; // Quirks
	        size = {
	          height: domObject.clientHeight,
	          width:  domObject.clientWidth
	        };
	      }
	    }
	
	    return size;
	  }
	
	  function getViewportOffset() {
	    return {
	      top:  w.pageYOffset || documentElement.scrollTop   || d.body.scrollTop,
	      left: w.pageXOffset || documentElement.scrollLeft  || d.body.scrollLeft
	    };
	  }
	
	  function checkInView() {
	    var $elements = $(), elementsLength, i = 0;
	
	    $.each(inviewObjects, function(i, inviewObject) {
	      var selector  = inviewObject.data.selector,
	          $element  = inviewObject.$element;
	      $elements = $elements.add(selector ? $element.find(selector) : $element);
	    });
	
	    elementsLength = $elements.length;
	    if (elementsLength) {
	      viewportSize   = viewportSize   || getViewportSize();
	      viewportOffset = viewportOffset || getViewportOffset();
	
	      for (; i<elementsLength; i++) {
	        // Ignore elements that are not in the DOM tree
	        if (!$.contains(documentElement, $elements[i])) {
	          continue;
	        }
	
	        var $element      = $($elements[i]),
	            elementSize   = { height: $element.height(), width: $element.width() },
	            elementOffset = $element.offset(),
	            inView        = $element.data('inview'),
	            visiblePartX,
	            visiblePartY,
	            visiblePartsMerged;
	        
	        // Don't ask me why because I haven't figured out yet:
	        // viewportOffset and viewportSize are sometimes suddenly null in Firefox 5.
	        // Even though it sounds weird:
	        // It seems that the execution of this function is interferred by the onresize/onscroll event
	        // where viewportOffset and viewportSize are unset
	        if (!viewportOffset || !viewportSize) {
	          return;
	        }
	        
	        if (elementOffset.top + elementSize.height > viewportOffset.top &&
	            elementOffset.top < viewportOffset.top + viewportSize.height &&
	            elementOffset.left + elementSize.width > viewportOffset.left &&
	            elementOffset.left < viewportOffset.left + viewportSize.width) {
	          visiblePartX = (viewportOffset.left > elementOffset.left ?
	            'right' : (viewportOffset.left + viewportSize.width) < (elementOffset.left + elementSize.width) ?
	            'left' : 'both');
	          visiblePartY = (viewportOffset.top > elementOffset.top ?
	            'bottom' : (viewportOffset.top + viewportSize.height) < (elementOffset.top + elementSize.height) ?
	            'top' : 'both');
	          visiblePartsMerged = visiblePartX + "-" + visiblePartY;
	          if (!inView || inView !== visiblePartsMerged) {
	            $element.data('inview', visiblePartsMerged).trigger('inview', [true, visiblePartX, visiblePartY]);
	          }
	        } else if (inView) {
	          $element.data('inview', false).trigger('inview', [false]);
	        }
	      }
	    }
	  }
	
	  $(w).bind("scroll resize", function() {
	    viewportSize = viewportOffset = null;
	  });
	  
	  // IE < 9 scrolls to focused elements without firing the "scroll" event
	  if (!documentElement.addEventListener && documentElement.attachEvent) {
	    documentElement.attachEvent("onfocusin", function() {
	      viewportOffset = null;
	    });
	  }
	
	  // Use setInterval in order to also make sure this captures elements within
	  // "overflow:scroll" elements or elements that appeared in the dom tree due to
	  // dom manipulation and reflow
	  // old: $(window).scroll(checkInView);
	  //
	  // By the way, iOS (iPad, iPhone, ...) seems to not execute, or at least delays
	  // intervals while the user scrolls. Therefore the inview event might fire a bit late there
	  setInterval(checkInView, 250);
	})(jQuery);	