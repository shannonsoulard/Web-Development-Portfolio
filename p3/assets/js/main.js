/**
* Template Name: ComingSoon - v2.1.0
* Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Set the count down timer
  if ($('.countdown').length) {
    var count = $('.countdown').data('count');
    var template = $('.countdown').html();
    $('.countdown').countdown(count, function(event) {
      $(this).html(event.strftime(template));
    });
  }

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

})(jQuery);

var calculateInputs = document.getElementById("calculateInputs");
var num1 = document.querySelector(".num1");
var num2 = document.querySelector(".num2");
var num3 = document.querySelector(".num3");
var displayMin = document.querySelector(".displayMin");
var displayMax = document.querySelector(".displayMax");
var displayMean = document.querySelector(".displayMean");
var displayMedian = document.querySelector(".displayMedian");
var displayRange = document.querySelector(".displayRange");

calculateInputs.onclick = function() {
var minvalue = 0;
var maxvalue = 0;
var meanvalue = 0;
var medianvalue = 0;
var rangevalue = 0;
    
minvalue = calculateMin();
maxvalue = calculateMax();
meanvalue = calculateMean();
medianvalue = calculateMedian();
rangevalue = calculateRange();
    
    
displayMin.innerHTML = "Min is " + minvalue.toFixed(2);
displayMax.innerHTML = "Max is " + maxvalue.toFixed(2);                                       
displayMean.innerHTML = "Mean is " + meanvalue.toFixed(2);
displayMedian.innerHTML = "Median is  " + medianvalue.toFixed(2);
displayRange.innerHTML = "Range is " + rangevalue.toFixed(2);
}
    
function calculateMin() {
    if(Number(num1.value) < Number(num2.value) && Number(num1.value) < Number(num3.value)) {
        var minvalue = Number(num1.value);
    }
    if(Number(num2.value) < Number(num1.value) && Number(num2.value) < Number(num3.value)) {
        minvalue = Number(num2.value);
    }
    if(Number(num3.value) < Number(num1.value) && Number(num3.value) < Number(num2.value)) {
        minvalue = Number(num3.value); 
    }
    return minvalue;
}

function calculateMax() {
    if(Number(num1.value) > Number(num2.value) && Number(num1.value) > Number(num3.value)) {
    var maxvalue = Number(num1.value);
    }
    if(Number(num2.value) > Number(num1.value) && Number(num2.value) > Number(num3.value)) {
        maxvalue = Number(num2.value);
    }
    if(Number(num3.value) > Number(num1.value) && Number(num3.value) > Number(num2.value)) {
        maxvalue = Number(num3.value); 
    }
    return maxvalue;
}

function calculateMean() {
    var meanvalue = ((Number(num1.value) + Number(num2.value) + Number(num3.value))/3)
    return meanvalue;
    
}

function calculateMedian() {
    var medianvalue;
    if(Number(num1.value) < Number(num2.value) && Number(num2.value) < Number(num3.value) || Number(num3.value) < Number(num2.value) && Number(num2.value) < Number(num1.value)) {
       medianvalue = Number(num2.value);
       }
    else if(Number(num2.value) < Number(num1.value) && Number(num1.value) < Number(num3.value) || Number(num3.value) < Number(num1.value) && Number(num1.value) < Number(num2.value)) {
       medianvalue = Number(num1.value);
       }
    else {
        medianvalue = Number(num3.value);
    }
    return medianvalue;
}

function calculateRange() {
    if(Number(num1.value) < Number(num2.value) && Number(num1.value) < Number(num3.value)) {
        var minvalue = Number(num1.value);
    }
    if(Number(num2.value) < Number(num1.value) && Number(num2.value) < Number(num3.value)) {
        minvalue = Number(num2.value);
    }
    if(Number(num3.value) < Number(num1.value) && Number(num3.value) < Number(num2.value)) {
        minvalue = Number(num3.value); 
    }
    
    if(Number(num1.value) > Number(num2.value) && Number(num1.value) > Number(num3.value)) {
    var maxvalue = Number(num1.value);
    }
    if(Number(num2.value) > Number(num1.value) && Number(num2.value) > Number(num3.value)) {
        maxvalue = Number(num2.value);
    }
    if(Number(num3.value) > Number(num1.value) && Number(num3.value) > Number(num2.value)) {
        maxvalue = Number(num3.value); 
    }
    
    var rangevalue = maxvalue - minvalue;
    return rangevalue;
}