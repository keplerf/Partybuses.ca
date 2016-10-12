 
    var cochin = {
      src: 'http://sll.partybuses.ca/impact.swf'
	  , wmode: 'transparent'	  
      ,ratios: [7, 1.32, 11, 1.31, 13, 1.24, 14, 1.25, 19, 1.23, 27, 1.2, 34, 1.19, 42, 1.18, 47, 1.17, 48, 1.18, 69, 1.17, 74, 1.16, 75, 1.17, 1.16]
    };

    var rockwell = {
      src: 'http://sll.partybuses.ca/sifr.swf'
	  , wmode: 'transparent'	
      ,ratios: [6, 1.41, 9, 1.35, 15, 1.29, 21, 1.25, 22, 1.22, 27, 1.24, 29, 1.21, 34, 1.22, 41, 1.21, 45, 1.2, 46, 1.21, 59, 1.2, 68, 1.19, 69, 1.2, 96, 1.19, 97, 1.18, 102, 1.19, 103, 1.18, 107, 1.19, 108, 1.18, 112, 1.19, 114, 1.18, 116, 1.19, 120, 1.18, 121, 1.19, 1.18]
    };

    // You probably want to switch this on, but read <http://wiki.novemberborn.net/sifr3/DetectingCSSLoad> first.
    // sIFR.useStyleCheck = true;
    sIFR.activate(cochin, rockwell);

    
  
   
  

  
    sIFR.replace(cochin, {selector: 'h5'});
	
	
	
  
    sIFR.replace(cochin, {
      selector: 'h2.title'
      ,css: {
        '.sIFR-root': { 'color': '#000000' , 'font-size':'22px' }
      }
     
    });