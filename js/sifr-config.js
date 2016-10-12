 
    var cochin = {
      src: '/swf/sifr.swf'
	  , wmode: 'transparent'	  
      ,ratios: [7, 1.32, 11, 1.31, 13, 1.24, 14, 1.25, 19, 1.23, 27, 1.2, 34, 1.19, 42, 1.18, 47, 1.17, 48, 1.18, 69, 1.17, 74, 1.16, 75, 1.17, 1.16]
    };

    var rockwell = {
      src: '/swf/sifr.swf'
	  , wmode: 'transparent'	
      ,ratios: [6, 1.41, 9, 1.35, 15, 1.29, 21, 1.25, 22, 1.22, 27, 1.24, 29, 1.21, 34, 1.22, 41, 1.21, 45, 1.2, 46, 1.21, 59, 1.2, 68, 1.19, 69, 1.2, 96, 1.19, 97, 1.18, 102, 1.19, 103, 1.18, 107, 1.19, 108, 1.18, 112, 1.19, 114, 1.18, 116, 1.19, 120, 1.18, 121, 1.19, 1.18]
    };

    // You probably want to switch this on, but read <http://wiki.novemberborn.net/sifr3/DetectingCSSLoad> first.
    // sIFR.useStyleCheck = true;
    sIFR.activate(cochin, rockwell);

    sIFR.replace(cochin, {
      selector: 'h2'
      ,css: {
        '.sIFR-root': { 'color': '#000000' , 'font-size':'18px' }
      }
     
    });
  
    sIFR.replace(rockwell, {
      selector: 'h5#pullquote'
      ,css: 'em { font-style: normal; color: #660000; }'
      ,selectable: false
    });
  
    sIFR.replace(cochin, {
      selector: '#image-header-text h3 '
      ,css: {
        '.sIFR-root': { 'color': '#FFFFFF' , 'font-size':'21px', 'text-align':'justify' }
      }
    });
  
    sIFR.replace(cochin, {selector: 'h3,h5'});
	
	 sIFR.replace(rockwell, {
      selector: '.button h6'
      	  ,css: [
        '.sIFR-root { color: #FFFFFF; font-size:16px; letter-spacing: 1 }'
        ,'a { text-decoration: none; color: #FFFFFF; padding:15px;}'
        ,'a:link { color: #FFFFFF; }'
        ,'a:hover { color: #E6E7E8; }'
      ]
	   
      ,filters: {
        DropShadow: {
          knockout: false
          ,distance: 2
          ,color: '#8C9399'
          ,strength: 5
        }
      }
    });
	
  
    sIFR.replace(cochin, {
      selector: 'h4'
      ,css: {
        '.sIFR-root': { 'color': '#FF6100' , 'font-size':'22px' }
      }
     
    });