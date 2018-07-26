/*$(function() {
                $("#TypeWirter_effect").typed({
                    strings: ["Want to learn Coding ?", "Join. The IEE WEBSITE SOCIERYT TO BECOME A MEMBER"],
                    typeSpeed: 0,
                    loop: true,
                    backSpeed: 30,
                    showCursor: true,
                    backDelay: 500,
                    startDelay: 1000,
                    contentType: 'text',
                    backspace: function(curString, curStrPos) {


                        setTimeout(function () {

                                    // check string array position
                                    // on the first string, only delete one word
                                    // the stopNum actually represents the amount of chars to
                                    // keep in the current string. In my case it's 3.
                                    if (curString.arrayPos == 20) {
                                        curString.stopNum = 14;
                                    }
                                    //every other time, delete the whole typed string
                                    else {
                                        self.stopNum = 14;

                                    }
                                }
                        )
                    }






                });
            });
			
			
			
			*/
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			$(function() {
		$('.TypeWirter_effect').typed({
			strings: ['Want to learn Coding ?', 'Want to learn '],
			typeSpeed: 60,
			showCursor: true,
           
            cursorChar: "|",
			backSpeed: 40,
			backDelay: 4000,
			 callback: function(){ showLang(); $('.typed-cursor').first().hide(); }
		});
});
function showLang() {
		$('.lang').typed({
			strings: ['C ?', 'Java ?', 'C++ ?'],
			typeSpeed: 50,
			backSpeed: 50,
			backDelay: 4000,
      loop: true
		});
}