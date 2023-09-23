function defaultView() {
		loadingPage();
		$( "#backStyle" ).hide();
		$( "#bringTheSun" ).show();
		$( "#centerDivPage" ).show();
		$( "#centerDivCircle" ).hide();
		$( ".changePage" ).show();
		$( ".menuItem" ).show();
		$( ".sideMenuItem" ).show();
		$( "#explorers" ).hide();
		$( "#standardIndexHide" ).hide();
		$( "#regionsIndexHide" ).hide();
		$( "#explorersIndexOpen" ).hide();
		$( "#explorersIndexHide" ).hide();
		$( "#US" ).hide();
		$( "#USIndexOpen" ).hide();
		$( "#USIndexHide" ).hide();
		$( "#Europe" ).hide();
		$( "#EuropeIndexOpen" ).hide();
		$( "#EuropeIndexHide" ).hide();
		$( "#logout" ).hide();
		$( "#standardIndex" ).hide();
		$( "#regionsIndex" ).hide();
		$( ".book" ).hide();
		$( "#book" ).show();
		$( "#turnPageBack" ).hide();
		$( "#turnPageNext" ).hide();
		$( "#removeBookmarkDiv" ).hide();
		$( "#addBookmarkDiv" ).hide();
		$( "#printVersionDiv" ).hide();
		$( "#activateMobileStyle" ).hide();
		startPage();
}

function startPage() {
	$( "#book" ).load("pages/title.html");
}

function loadingPage() {
	$( "#book" ).load("pages/loading.html");
}

function preLoadPage() {
	defaultView();
	$( "#book" ).hide();
}

$(document).ready(function(){
	defaultView();
	startPage();
	$("#bringTheSun").click(function() {
		$( "#backStyle" ).show();
		$( "#bringTheSun" ).hide();
		$( "#centerDivPage" ).hide();
		$( "#centerDivCircle" ).show();
		$( ".changePage" ).hide();
		$( ".menuItem" ).hide();
		$( ".sideMenuItem" ).hide();
		$( "#activateMobileStyle" ).show();
	});

	$("#backStyle").click(function() {
		defaultView();
		startPage();
	});

	$("#standardIndexOpen").click(function() {
		preLoadPage();
		$( "#loadLast" ).show();
		$( "#standardIndex" ).show();
		$( "#standardIndexOpen" ).hide();
		$( "#standardIndexHide" ).show();
		$( "#printVersionDiv" ).show();
	});
	$("#standardIndexHide").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
	});
	$("#regionsIndexOpen").click(function() {
		preLoadPage();
		$( "#loadLast" ).show();
		$( "#regionsIndex" ).show();
		$( "#regionsIndexOpen" ).hide();
		$( "#regionsIndexHide" ).show();
		$( "#printVersionDiv" ).show();
	});
	$("#regionsIndexHide").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
	});
	$("#standard").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		$( "#addBookmarkDiv" ).show();
		$( "#printVersionDiv" ).show();
		$("#book").load("pages/standard.html #1001");
		$.cookie('wgcCurrentPage', '1001', { expires: 7 });
		$( "#turnPageNext" ).show();
	});
	$("#regions").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		$( "#addBookmarkDiv" ).show();
		$( "#printVersionDiv" ).show();
		$("#book").load("pages/regions.html #10001");
		$.cookie('wgcCurrentPage', '10001', { expires: 7 });
		$( "#turnPageNext" ).show();
	});

	$("#introduction").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		$("#book").load("pages/introduction.html");
		$.cookie('wgcCurrentPage', '1', { expires: 7 });
		$( "#turnPageBack" ).hide();
		$( "#turnPageNext" ).hide();
		$( "#loadLast" ).hide();
		$( "#printVersionDiv" ).show();
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
	});
	$("#changelog").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		$("#book").load("pages/changelog.html");
		$.cookie('wgcCurrentPage', '3', { expires: 7 });
		$( "#turnPageBack" ).hide();
		$( "#turnPageNext" ).hide();
		$( "#printVersionDiv" ).show();
		$( "#loadLast" ).hide();
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
	});
	$("#links").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		$("#book").load("pages/links.html");
		$.cookie('wgcCurrentPage', '4', { expires: 7 });
		$( "#turnPageBack" ).hide();
		$( "#turnPageNext" ).hide();
		$( "#printVersionDiv" ).show();
		$( "#loadLast" ).hide();
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
	});
	$("#addBookmarkDiv").click(function() {
		$( "#removeBookmarkDiv" ).show();
		$( "#addBookmarkDiv" ).hide();
	});
	$("#removeBookmarkDiv").click(function() {
		$( "#removeBookmarkDiv" ).hide();
		$( "#addBookmarkDiv" ).show();
	});
	$("#activateStyle1").click(function() {
		setActiveStyleSheet('version1');
	});
	$("#activateMobileStyle").click(function() {
		setActiveStyleSheet('mobileversion');
	});
	$("#activateStyle2").click(function() {
		setActiveStyleSheet('version2');
	});
	$(document).bind('keydown', 'd', function(){
		turnNextPage();
	});
	$(document).bind('keydown', 'a', function(){
		turnPrevPage();
	});
	$(document).bind('keydown', 'left', function(){
		turnPrevPage();
	});
	$(document).bind('keydown', 'right', function(){
		turnNextPage();
	});
	$("#turnPageBack").click(function() {
		turnPrevPage();
	});
	$("#turnPageNext").click(function() {
		turnNextPage();
	});

});

function turnNextPage() {
	defaultView();
	if ($.cookie('wgcCurrentPage') === "1016") { //This must be the number of the last finished section;
		$("#book").load("pages/messages.html #noNext");
		$.cookie('wgcCurrentPage', '8', { expires: 7 });
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
		$( "#turnPageNext" ).hide();
		$( "#turnPageBack" ).show();
	}
	else if ($.cookie('wgcCurrentPage') === "10190") { //This must be the number of the last finished section;
		$("#book").load("pages/messages.html #noNext");
		$.cookie('wgcCurrentPage', '8', { expires: 7 });
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
		$( "#turnPageNext" ).hide();
		$( "#turnPageBack" ).show();
	}
	else {

		if ($.cookie('wgcCurrentPage').length === 5) {
			$( "#addBookmarkDiv" ).show();
			$( "#printVersionDiv" ).show();
			$( "#turnPageBack" ).show();
			$( "#turnPageNext" ).show();
			var course = "regions";
			var newP = parseInt($.cookie('wgcCurrentPage')) + 1;
			$.cookie('wgcCurrentPage', newP, { expires: 7 });
			var section = " #" + newP;
			$("#book").load("pages/" + course + ".html " + section);
			$('#book').animate({
				scrollTop: 0
			}, 'fast');
			$( "#loadLast" ).hide();
		}

		else if ($.cookie('wgcCurrentPage').length === 4) {
			$( "#addBookmarkDiv" ).show();
			$( "#printVersionDiv" ).show();
			$( "#turnPageBack" ).show();
			$( "#turnPageNext" ).show();
			var course = "standard";
			var newP = parseInt($.cookie('wgcCurrentPage')) + 1;
			$.cookie('wgcCurrentPage', newP, { expires: 7 });
			var section = " #" + newP;
			$("#book").load("pages/" + course + ".html " + section);
			$('#book').animate({
				scrollTop: 0
			}, 'fast');
			$( "#loadLast" ).hide();
		}
	};
}

function turnPrevPage() {
	defaultView();
	if ($.cookie('wgcCurrentPage').length === 5) {
		$( "#addBookmarkDiv" ).show();
		$( "#printVersionDiv" ).show();
		$( "#turnPageNext" ).show();
		$( "#turnPageBack" ).show();
		var course = "regions";
		var newP = parseInt($.cookie('wgcCurrentPage')) - 1;
		$.cookie('wgcCurrentPage', newP, { expires: 7 });
		var section = " #" + newP;
		$("#book").load("pages/" + course + ".html " + section);
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
		
		if (newP === 10001) {
			$( "#turnPageBack" ).hide();
			$( "#turnPageNext" ).show();
		}
		$( "#loadLast" ).hide();
		
	}

	else if ($.cookie('wgcCurrentPage').length === 4) {
		$( "#addBookmarkDiv" ).show();
		$( "#turnPageNext" ).show();
		$( "#turnPageBack" ).show();
		$( "#printVersionDiv" ).show();
		var course = "standard";
		var newP = parseInt($.cookie('wgcCurrentPage')) - 1;
		$.cookie('wgcCurrentPage', newP, { expires: 7 });
		var section = " #" + newP;
		$("#book").load("pages/" + course + ".html " + section);
		$('#book').animate({
			scrollTop: 0
		}, 'fast');
		
		if (newP === 1001) {
			$( "#turnPageBack" ).hide();
			$( "#turnPageNext" ).show();
		}
		$( "#loadLast" ).hide();
	}
}

$(document).ready(function(){	
	$(".chapterLink").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		$( "#addBookmarkDiv" ).show();
		$( "#printVersionDiv" ).show();
		var href = $(this).attr('href');
		var page = parseInt(href);
		var section = " #" + page;
		$.cookie('wgcCurrentPage', page, { expires: 7 });
		if (href.length === 4) {
			var course = "standard";
			$("#book").load("pages/" + course + ".html " + section);
			$('#book').animate({
				scrollTop: 0
			}, 'fast');

			if (page === 1001) {
				$( "#turnPageBack" ).hide();
				$( "#turnPageNext" ).show();
			}

			else {
				$( "#turnPageNext" ).show();
				$( "#turnPageBack" ).show();
			}
		}
		else if (href.length === 5) {
			var course = "regions";
			$("#book").load("pages/" + course + ".html " + section);
			$('#book').animate({
				scrollTop: 0
			}, 'fast');

			if (page === 10001) {
				$( "#turnPageBack" ).hide();
				$( "#turnPageNext" ).show();
			}
			else {
				$( "#turnPageNext" ).show();
				$( "#turnPageBack" ).show();
			}
		}

	});
});

$(document).ready(function(){
	$("#loadLast").click(function() {
		defaultView();
		$( "#loadLast" ).hide();
		if ($.cookie('wgcCurrentPage') === "8") {
			$("#book").load("pages/messages.html #noNext");
			$( "#turnPageBack" ).hide();
			$( "#turnPageNext" ).hide();
			$( "#printVersionDiv" ).show();
			$('#book').animate({
				scrollTop: 0
			}, 'fast');
		}
		else if ($.cookie('wgcCurrentPage') === "1") {
			$("#book").load("pages/introduction.html");
			$( "#turnPageBack" ).hide();
			$( "#turnPageNext" ).hide();
			$( "#printVersionDiv" ).show();
			$('#book').animate({
				scrollTop: 0
			}, 'fast');
		}
		else if ($.cookie('wgcCurrentPage') === "3") {
			$("#book").load("pages/changelog.html");
			$( "#turnPageBack" ).hide();
			$( "#turnPageNext" ).hide();
			$( "#printVersionDiv" ).show();
			$('#book').animate({
				scrollTop: 0
			}, 'fast');
		}
		else if ($.cookie('wgcCurrentPage') === "4") {
			$("#book").load("pages/links.html");
			$( "#turnPageBack" ).hide();
			$( "#turnPageNext" ).hide();
			$( "#printVersionDiv" ).show();
			$('#book').animate({
				scrollTop: 0
			}, 'fast');
		}
		else {
			if ($.cookie('wgcCurrentPage').length === 4) {
				$( "#addBookmarkDiv" ).show();
				$( "#printVersionDiv" ).show();
				var course = "standard";
				var page = parseInt($.cookie('wgcCurrentPage'));
				var section = " #" + page;
				$("#book").load("pages/" + course + ".html " + section);
				$('#book').animate({
					scrollTop: 0
				}, 'fast');

				if (page === 1001) {
					$( "#turnPageBack" ).hide();
					$( "#turnPageNext" ).show();
				}

				else {
					$( "#turnPageNext" ).show();
					$( "#turnPageBack" ).show();
				}

			}
			else if ($.cookie('wgcCurrentPage').length === 5) {
				$( "#addBookmarkDiv" ).show();
				$( "#printVersionDiv" ).show();
				var course = "regions";
				var page = parseInt($.cookie('wgcCurrentPage'));
				var section = " #" + page;
				$("#book").load("pages/" + course + ".html " + section);
				$('#book').animate({
					scrollTop: 0
				}, 'fast');
				
				if (page === 10001) {
					$( "#turnPageBack" ).hide();
					$( "#turnPageNext" ).show();
				}
				else {
					$( "#turnPageNext" ).show();
					$( "#turnPageBack" ).show();
				}

			}
		}
	});
});

//FANCYBOX

$(document).ready(function() {
	$(".fancybox").fancybox();
	$("#image").fancybox({
	  helpers: {
	      title : {
	          type : 'float'
	      }
	  }
	});
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
})

$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});