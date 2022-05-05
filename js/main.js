// 
(function ($) {
	"use strict";

	var isMobile = {
		Android: function () {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function () {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function () {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function () {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function () {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function () {
			return (
				isMobile.Android() ||
				isMobile.BlackBerry() ||
				isMobile.iOS() ||
				isMobile.Opera() ||
				isMobile.Windows()
			);
		},
	};

	$(window).stellar({
		responsive: true,
		parallaxBackgrounds: true,
		parallaxElements: true,
		horizontalScrolling: false,
		hideDistantElements: false,
		scrollProperty: "scroll",
	});

	var fullHeight = function () {
		$(".js-fullheight").css("height", $(window).height());
		$(window).resize(function () {
			$(".js-fullheight").css("height", $(window).height());
		});
	};
	fullHeight();

	// loader
	var loader = function () {
		setTimeout(function () {
			if ($("#ftco-loader").length > 0) {
				$("#ftco-loader").removeClass("show");
			}
		}, 1);
	};
	loader();

	// Scrollax
	$.Scrollax();

	var carousel = function () {
		$(".home-slider").owlCarousel({
			loop: true,
			autoplay: true,
			margin: 0,
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			nav: false,
			autoplayHoverPause: false,
			items: 1,
			navText: [
				"<span class='ion-md-arrow-back'></span>",
				"<span class='ion-chevron-right'></span>",
			],
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				},
			},
		});
		$(".carousel-testimony").owlCarousel({
			autoplay: true,
			autoHeight: true,
			center: true,
			loop: true,
			items: 1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			dots: true,
			navText: [
				'<span class="ion-ios-arrow-back">',
				'<span class="ion-ios-arrow-forward">',
			],
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				},
			},
		});
		$(".carousel-team").owlCarousel({
			autoplay: true,
			autoHeight: true,
			items: 1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			dots: true,
			navText: [
				'<span class="ion-ios-arrow-back">',
				'<span class="ion-ios-arrow-forward">',
			],
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 3,
				},
				1000: {
					items: 4,
				},
			},
		});
	};
	carousel();

	// $("nav .dropdown").hover(
	// 	function () {
	// 		var $this = $(this);
	// 		// 	 timer;
	// 		// clearTimeout(timer);
	// 		$this.addClass("show");
	// 		$this.find("> a").attr("aria-expanded", true);
	// 		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
	// 		$this.find(".dropdown-menu").addClass("show");
	// 	},
	// 	function () {
	// 		var $this = $(this);
	// 		// timer;
	// 		// timer = setTimeout(function(){
	// 		$this.removeClass("show");
	// 		$this.find("> a").attr("aria-expanded", false);
	// 		// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
	// 		$this.find(".dropdown-menu").removeClass("show");
	// 		// }, 100);
	// 	}
	// );

	$("#dropdown04").on("show.bs.dropdown", function () {
		console.log("show");
	});


	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');
					navbar.removeClass("navbar-expand")
					navbar.addClass("navbar-expand-lg")
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
					navbar.addClass('navbar-expand')
					navbar.removeClass("navbar-expand-lg")
					let nav_bar = $("#ftco-nav")
					if (nav_bar.hasClass("show")){
						nav_bar.removeClass("show");
					}

				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');

				}
			}
		});
	};
	scrollWindow();


	var isMobile = {
		Android: function () {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function () {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function () {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function () {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function () {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function () {
			return (
				isMobile.Android() ||
				isMobile.BlackBerry() ||
				isMobile.iOS() ||
				isMobile.Opera() ||
				isMobile.Windows()
			);
		},
	};



	var contentWayPoint = function () {
		var i = 0;
		$(".ftco-animate").waypoint(
			function (direction) {
				if (
					direction === "down" &&
					!$(this.element).hasClass("ftco-animated")
				) {
					i++;

					$(this.element).addClass("item-animate");
					setTimeout(function () {
						$("body .ftco-animate.item-animate").each(function (k) {
							var el = $(this);
							setTimeout(
								function () {
									var effect = el.data("animate-effect");
									if (effect === "fadeIn") {
										el.addClass("fadeIn ftco-animated");
									} else if (effect === "fadeInLeft") {
										el.addClass("fadeInLeft ftco-animated");
									} else if (effect === "fadeInRight") {
										el.addClass(
											"fadeInRight ftco-animated"
										);
									} else {
										el.addClass("fadeInUp ftco-animated");
									}
									el.removeClass("item-animate");
								},
								k * 50,
								"easeInOutExpo"
							);
						});
					}, 100);
				}
			},
			{ offset: "95%" }
		);
	};
	contentWayPoint();

	// navigation
	// var OnePageNav = function () {
	// 	$(
	// 		".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#'], p a[href^='#']"
	// 	).on("click", function (e) {
	// 		e.preventDefault();
	// 		console.log(1);
	// 		var hash = this.hash,
	// 			navToggler = $(".navbar-toggler");
	// 		$("html, body").animate(
	// 			{
	// 				scrollTop: $(hash).offset().top,
	// 			},
	// 			700,
	// 			"easeInOutExpo",
	// 			function () {
	// 				window.location.hash = hash;
	// 			}
	// 		);
			
	// 		if (
	// 			navToggler.is(":visible") &&
	// 			!navToggler.hasClass("collapsed")
	// 		) {
	// 			navToggler.click();
	// 		}
	// 	});
	// 	$("body").on("activate.bs.scrollspy", function () {
	// 		console.log("nice");
	// 	});
	// };
	// OnePageNav();

	// magnific popup
	$(".image-popup").magnificPopup({
		type: "image",
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: "mfp-no-margins mfp-with-zoom", // class to remove default margin from left and right side
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			verticalFit: true,
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
		},
	});

	$(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
		disableOn: 700,
		type: "iframe",
		mainClass: "mfp-fade",
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false,
	});

})(jQuery);

const validateEmail = (email) => {
	let emailreg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	if (email.match(emailreg)) return true; else return false
};

function phonenumber(inputtxt) {
	let phoneno = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
	if (inputtxt.match(phoneno)) {
		return true;
	}
	else {
		return false;
	}
}
function validateName(name) {

	let namereg = /[\p{Letter}\p{Mark}\s]+/gu;
	if (name.length > 2 && name.length < 256 && name.match(namereg)) {
		return true;
	}
	else {
		return false;
	}
}

function createNoti(text, type = 'error', timeout = 3000) {
	new Noty({
		theme: 'metroui',
		layout: 'bottomLeft',
		type: type,
		text: text,
		timeout: timeout,
		visibilityControl: true
	}).show();
}
function getDateTimeByArtist(selectedDateOptions = null) {
	let selected_services = [];
	$("#step-2 input[name='selected_services']:checked").each(function () {
		selected_services.push($(this).val());
	})
	console.log(selected_services);

	let selected_employee = document.querySelector("#step-3 select[name=artist]").value
	console.log(selected_services);
	let querystring = "?"

	querystring += "selected_services=" + JSON.stringify(selected_services)
	querystring += "&selected_employee=" + selected_employee
	if (selectedDateOptions != null) {
		querystring += "&selectedDate=" + document.querySelector("#step-3 select[name=date]").options[selectedDateOptions].innerText
	}
	if (document.querySelector("input").value == 1){
		querystring+="&admin="
	}
	let xmlHttp = new XMLHttpRequest();
	xmlHttp.open("get", "included/query.php" + querystring);
	xmlHttp.onreadystatechange = function () {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			let res = JSON.parse(xmlHttp.response);
			console.log(res);

			let bookingdate = document.getElementById('bookingdate');
			let bookingtime = document.getElementById('bookingtime');
			bookingtime.innerHTML = ""
			if (selectedDateOptions == null) {
				bookingdate.innerHTML = ""
				res['date'].forEach((date, index) => {
					bookingdate.insertAdjacentHTML(
						"beforeend",
						`<option value="${index}">${date}</option>`
					);
				});
			}

			if (res.time.length == 0) {

				bookingtime.insertAdjacentHTML(
					"beforeend",
					`<option value="busy">All busy time</option>`
				);
			}
			else {

				res['time'].forEach((time, index) => {
					bookingtime.insertAdjacentHTML(
						"beforeend",
						`<option value="${index}">${time}</option>`
					);
				});

			}
			$('#smartwizard').smartWizard("loader", "hide");

		}
	}
	xmlHttp.send()

}
const debounce = (func, delay) => {
	let debounceTimer
	return function () {
		const context = this
		const args = arguments
		clearTimeout(debounceTimer)
		debounceTimer
			= setTimeout(() => func.apply(context, args), delay)
	}
}
document.addEventListener("DOMContentLoaded", function (event) {
	let artist = document.querySelector("#artist");
	$.get("included/query.php?artist", function (data) {
		console.log(JSON.parse(data));
		let arr = JSON.parse(data);
		arr.forEach((emp) => {
			console.log(emp);
			artist.insertAdjacentHTML(
				"beforeend",
				`<option value="${emp.employee_id}">${emp.first_name + " " + emp.last_name
				}</option>`
			);
		});
	});

	$("#smartwizard").smartWizard({
		selected: 0, // Initial selected step, 0 = first step
		theme: "progress", // theme for the wizard, related css need to include for other than default theme
		justified: true, // Nav menu justification. true/false
		darkMode: false, // Enable/disable Dark Mode if the theme supports. true/false
		autoAdjustHeight: false, // Automatically adjust content height
		cycleSteps: false, // Allows to cycle the navigation of steps
		backButtonSupport: true, // Enable the back button support
		enableURLhash: false, // Enable selection of the step based on url hash
		transition: {
			animation: "fade", // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
			speed: "400", // Transion animation speed
			easing: "", // Transition animation easing. Not supported without a jQuery easing plugin
		},
		toolbarSettings: {
			toolbarPosition: "bottom", // none, top, bottom, both
			toolbarButtonPosition: "right", // left, right, center
			showNextButton: true, // show/hide a Next button
			showPreviousButton: true, // show/hide a Previous button
			toolbarExtraButtons: [], // Extra buttons to show on toolbar, array of jQuery input/buttons elements
		},
		anchorSettings: {
			anchorClickable: true, // Enable/Disable anchor navigation
			enableAllAnchors: false, // Activates all anchors clickable all times
			markDoneStep: true, // Add done state on navigation
			markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
			removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
			enableAnchorOnDoneStep: true, // Enable/Disable the done steps navigation
		},
		keyboardSettings: {
			keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
			keyLeft: [37], // Left key code
			keyRight: [39], // Right key code
		},
		lang: {
			// Language variables for button
			next: "Next",
			previous: "Previous",
		},
		disabledSteps: [], // Array Steps disabled
		errorSteps: [], // Highlight step with errors
		hiddenSteps: [], // Hidden steps
	});

	// $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection) {
	// 	console.log("You are on step "+stepIndex+" now");

	// });
	// document.querySelector("#step-1").addEventListener("keyup", (e) => {

	// });

	$("#smartwizard").on("leaveStep", function (e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
		if (currentStepIndex == 0) {
			let inputs = document.querySelectorAll("#step-1 input")
			for (const input of inputs) {
				let inp = input.value;
				inp.trim();
				if (inp == "") {
					e.preventDefault();
					createNoti('Please fill in your information ',)
					break;
				}
				else {
					if ((input.name == 'phone' && !phonenumber(inp))) {
						e.preventDefault()
						console.log('phone err');
						createNoti('Your phone number is not correct<br>Please change it',)
						break;
					}
					else if (input.name == 'email' && !validateEmail(inp)) {
						e.preventDefault()
						console.log('email err');
						createNoti('Your email is not correct<br>Please change it',)

						break;
					}
					else if (input.name == 'name' && !validateName(inp)) {
						e.preventDefault()
						console.log('name err');
						createNoti('Your name is not correct<br>Please change it')
						break;
					}
				}
			}
		} else if (currentStepIndex == 1) {
			let selected_services = [];

			$("#step-2 input[name='selected_services']:checked").each(function () {
				selected_services.push($(this).val());
			})

			console.log(selected_services);
			if (nextStepIndex == 0) {

			} else if (selected_services.length == 0) {
				e.preventDefault();
				createNoti('Please select at least a service',)
			}
			else {
				$('#smartwizard').smartWizard("loader", "show");
				let a = getDateTimeByArtist()

			}

		}
		else if (currentStepIndex == 2) {
			document.querySelector("#smartwizard .sw-btn-next").removeEventListener('click', confirmBooking)

		}


	});
	function confirmBooking() {

		let step1 = document.querySelectorAll("#step-1 input")
		let email = step1[0].value
		let phone = step1[1].value
		let name = step1[2].value

		let selected_services = []
		let stringselected = '';
		$("#step-2 input[name='selected_services']:checked").each(function () {
			selected_services.push($(this).val());
			stringselected = stringselected + `<li>${$(this).closest(".item_details").children(":first").text()}</li>`
		})
		console.log(stringselected);

		let selected_employee = document.querySelector("#step-3 select[name=artist]").value

		let selected_date = document.querySelector("#step-3 select[name=date]").selectedOptions[0].text
		let selected_time = document.querySelector("#step-3 select[name=time]").selectedOptions[0].text
		if (selected_time == "All busy time") {
			createNoti(`Your artist is busy on ${selected_date}<br>Please change to another date`)
			return
		}
		let confirmhtml = `<hr>
		<span>
		<strong>Name: </strong> ${name} <br>
		<strong>Email: </strong> ${email} <br>
		<strong>Phone: </strong> ${phone} <br>
		<hr>
		<strong>Service:</strong>
		<ul>
			${stringselected}
		</ul>
		<hr>
		<strong>Artist: </strong>${document.querySelector("#step-3 select[name=artist]").selectedOptions[0].text}<br>
		<strong>Booking time: </strong>${selected_date + "  " + selected_time}<br>
		<br>
		<small>Note: You can step back to update your choice again</small>
		</span>`

		$.confirm({
			title: '<span class="text-dark font-weight-bold">Confirm the information</span>',
			columnClass: `medium`,

			content: `${confirmhtml}`,
			buttons: {
				cancel: {
					text: 'cancel',
					btnClass: 'btn-danger',
				},
				confirm: {
					text: 'Booking',
					btnClass: 'btn-orange',
					keys: ['enter', 'shift'],
					action: function () {
						let xhr = new XMLHttpRequest();
						xhr.open('POST', 'included/appointment.php', true);
						xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						xhr.onreadystatechange = function () {
							if (this.readyState == 4 && this.status == 200) {
								console.log(this.responseText);
								if (this.responseText === 'success') {
									$("#smartwizard").smartWizard("reset")
									document.querySelectorAll("#step-1 input").forEach(element => {
										element.value = ''
									})
									createNoti('Your appointment has been record successfully', 'success')
								}
								else {
									$("#smartwizard").smartWizard("reset")
									createNoti('Your appointment has not recorded, please try again')
								}
							}
						};
						xhr.send(`createappointment=&email=${email.toString()}&name=${name.toString()}&phone=${phone.toString()}&selected_services=${JSON.stringify(selected_services)}&selected_employee=${selected_employee}&selected_date=${selected_date}&selected_time=${selected_time}`);
					}
				}

			}
		});
	}
	$("#smartwizard").on("showStep", function (e, anchorObject, stepIndex, stepDirection) {
		if (stepIndex == 2) {
			document.querySelector("#smartwizard .sw-btn-next").classList.remove('disabled')
			document.querySelector("#smartwizard .sw-btn-next").innerText = "Finish"

			document.querySelector("#artist").addEventListener("change", (event) => {
				$('#smartwizard').smartWizard("loader", "show");
				getDateTimeByArtist()
			})
			document.querySelector("#bookingdate").addEventListener("change", (event) => {
				$('#smartwizard').smartWizard("loader", "show");
				getDateTimeByArtist(document.querySelector("#step-3 select[name=date]").value)
			})
			document.querySelector("#smartwizard .sw-btn-next").addEventListener("click", confirmBooking)
		}
		else {
			document.querySelector("#smartwizard .sw-btn-next").removeEventListener("click", confirmBooking)
			document.querySelector("#smartwizard .sw-btn-next").classList.remove('finish')
			document.querySelector("#smartwizard .sw-btn-next").innerText = "Next"
		}

	});
	// document.querySelector("#smartwizard #step1 input[name='email']").addEventListener('onfocusout', ()=>{

	// })
	$("#step-1 input").focusout(debounce((event) => {
		if (event.target.name === "name") return;
		let xhr = new XMLHttpRequest();
		xhr.open('POST', 'included/query.php', true);
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				let data = JSON.parse(this.responseText);
				if (data.length > 0) {
					let step1 = document.querySelectorAll("#step-1 input")
					step1[0].value = data[0].client_email
					step1[1].value = data[0].phone_number
					step1[2].value = data[0].first_name + " " + data[0].last_name
					createNoti("We have fill your information. Change if you want update it. ", "success", '3000')
					console.log(data);
				} else {
					console.log(data);
				}
			}
		};
		xhr.send(`getinfo=&type=${event.target.name}&data=${event.target.value}`);
	}, 100))

});
