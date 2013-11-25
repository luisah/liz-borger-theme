/**
 * Gradual: Transitioned gradient backgrounds
 * MIT license http://www.opensource.org/licenses/mit-license.php/
 * @author Kyle Foster http://kylefoster.me
 * Stolen from http://bit.ly/10EDU9K & http://bit.ly/KvWBTK
 */
;(function ( $, window, document, undefined ) {

  $.fn.gradual = function ( options ) {
    
    options = $.extend( {}, $.fn.gradual.options, options );

    return this.each(function () {
      
      // Define our variables
      var step       = 0,   
          element    = $(this),          
          colorIndex = [0,1,2,3],
          transSpeed = options.transSpeed / 1000,
          colors     = new Array([255,193,255],[159,255,255],[255,189,166],[101,80,255],[198,198,198],[255,193,255]);
      
      // Gradient update function
      function updateGradient() {
        var istep  = 1 - step,
            c0x0   = colors[colorIndex[0]],
            c0x1   = colors[colorIndex[1]],
            c1x0   = colors[colorIndex[2]],
            c1x1   = colors[colorIndex[3]],
            r1     = Math.round(istep * c0x0[0] + step * c0x1[0]),
            g1     = Math.round(istep * c0x0[1] + step * c0x1[1]),
            b1     = Math.round(istep * c0x0[2] + step * c0x1[2]),
            r2     = Math.round(istep * c1x0[0] + step * c1x1[0]),
            g2     = Math.round(istep * c1x0[1] + step * c1x1[1]),
            b2     = Math.round(istep * c1x0[2] + step * c1x1[2]),
            color1 = '#' + ((r1 << 16) | (g1 << 8) | b1).toString(16),
            color2 = '#' + ((r2 << 16) | (g2 << 8) | b2).toString(16),
            prefix = (/mozilla/.test(navigator.userAgent.toLowerCase()) && 
                     !/webkit/.test(navigator.userAgent.toLowerCase())) ? '-moz-'    : 
                     (/webkit/.test(navigator.userAgent.toLowerCase())) ? '-webkit-' :
                     (/msie/.test(navigator.userAgent.toLowerCase()  )) ? '-ms-'     :
                     (/opera/.test(navigator.userAgent.toLowerCase() )) ? '-o-'      : '';

        // Set our gradient  
        element.css({ background : prefix + 'linear-gradient(left top, ' + color1 + ' 0%, ' + color2 + ' 100%)' });
          
        step += transSpeed;
        
        if ( step >= 1 ) {
          step %= 1;
          colorIndex[0] = colorIndex[1];
          colorIndex[2] = colorIndex[3];
          colorIndex[1] = (colorIndex[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
          colorIndex[3] = (colorIndex[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
        }
      }
      
      // Kick off timed intervals
      setInterval(updateGradient, 10);
    
    });
  }
  
  // Overridable default options
  $.fn.gradual.options = {
    transSpeed : 2 // Higher number = faster transition
  }
  
})( jQuery, window, document );

// Instantiate plugin
jQuery('.home.gradient').gradual();
jQuery('.home .about-content').gradual();
jQuery('.home .list-content').gradual();