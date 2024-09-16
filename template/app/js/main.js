/**
  * Header Connect
  * retinaLogo
  * ajaxContactForm
  * headerFixed
  * hover Image team
  * select js
  * mobileNav
  * ajaxSubscribe
  * alertBox
*/

; (function ($) {
  "use strict";

  var themesflatTheme = {

    // Main init function
    init: function () {
      this.config();
      this.events();
    },

    // Define vars for caching
    config: function () {
      this.config = {
        $window: $(window),
        $document: $(document),
      };
    },

    // Events
    events: function () {
      var self = this;

      // Run on document ready
      self.config.$document.on('ready', function () {


        // Retina Logos
        self.retinaLogo();


      });

      // Run on Window Load
      self.config.$window.on('load', function () {

      });
    },

  }; // end themesflatTheme

  // Start things up
  themesflatTheme.init();

  var retinaLogos = function () {
    var retina = window.devicePixelRatio > 1 ? true : false;
    if (retina) {
      $('#site-logo-inner').find('img').attr({ src: 'assets/images/logo/logo@2x.png', width: '197', height: '48' });

      $('#logo-footer.style').find('img').attr({ src: 'assets/images/logo/logo-footer@2x.png', width: '197', height: '48' });
      $('#logo-footer.style2').find('img').attr({ src: 'assets/images/logo/logo@2x.png', width: '197', height: '48' });
    }
  };

  var ajaxContactForm = function () {
    $('#contactform,#commentform').each(function () {
      $(this).validate({
        submitHandler: function (form) {
          var $form = $(form),
            str = $form.serialize(),
            loading = $('<div />', { 'class': 'loading' });

          $.ajax({
            type: "POST",
            url: $form.attr('action'),
            data: str,
            beforeSend: function () {
              $form.find('.form-submit,comment-form').append(loading);
            },
            success: function (msg) {
              var result, cls;
              if (msg === 'Success') {
                result = 'Message Sent Successfully To Email Administrator. ( You can change the email management a very easy way to get the message of customers in the user manual )';
                cls = 'msg-success';
              } else {
                result = 'Error sending email.';
                cls = 'msg-error';
              }

              $form.prepend(
                $('<div />', {
                  'class': 'flat-alert ' + cls,
                  'text': result
                }).append(
                  $('<a class="close" href="#"><i class="fa fa-close"></i></a>')
                )
              );

              $form.find(':input').not('.submit').val('');
            },
            complete: function (xhr, status, error_thrown) {
              $form.find('.loading').remove();
            }
          });
        }
      });
    }); // each contactform
  };

  var headerFixed = function () {
    if ($('body').hasClass('header-fixed')) {
      var nav = $('.header-lower');
      if (nav.length) {
        var
          offsetTop = nav.offset().top,
          headerHeight = nav.height(),
          injectSpace = $("<div>", {
            height: headerHeight
          }).insertAfter(nav);
        injectSpace.hide();

        $(window).on('load scroll', function () {
          if ($(window).scrollTop() > offsetTop + headerHeight) {
            nav.addClass('is-fixed');
            injectSpace.show();
          } else {
            nav.removeClass('is-fixed');
            injectSpace.hide();
          }

          if ($(window).scrollTop() > 300) {
            nav.addClass('is-small');
          } else {
            nav.removeClass('is-small');
          }
        })
      }
    }
  };

  //>> Team Hover Image Show Slider Start <<//
  const teamItems = document.querySelectorAll(".hover-images");

  function followImageCursor(event, teamItems) {
    const contentBox = teamItems.getBoundingClientRect();
    const dx = event.clientX - contentBox.x;
    const dy = event.clientY - contentBox.y;
    teamItems.children[2].style.transform = `translate(${dx}px, ${dy}px) rotate(0)`;
  }

  teamItems.forEach((item, i) => {
    item.addEventListener("mousemove", (event) => {
      setInterval(followImageCursor(event, item), 1000);
    });
  });

  /* Contact Form
------------------------------------------------------------------------------------- */
  var ajaxContactForm = function () {
    $("#contactform").each(function () {
      $(this).validate({
        submitHandler: function (form) {
          var $form = $(form),
            str = $form.serialize(),
            loading = $("<div />", { class: "loading" });

          $.ajax({
            type: "POST",
            url: $form.attr("action"),
            data: str,
            beforeSend: function () {
              $form.find(".send-wrap").append(loading);
            },
            success: function (msg) {
              var result, cls;
              if (msg == "Success") {
                result =
                  "Email Sent Successfully. Thank you, Your application is accepted - we will contact you shortly";
                cls = "msg-success";
              } else {
                result = "Error sending email.";
                cls = "msg-error";
              }
              $form.prepend(
                $("<div />", {
                  class: "flat-alert " + cls,
                  text: result,
                }).append(
                  $(
                    '<a class="close" href="#"><i class="icon icon-close2"></i></a>'
                  )
                )
              );

              $form.find(":input").not(".submit").val("");
            },
            complete: function (xhr, status, error_thrown) {
              $form.find(".loading").remove();
            },
          });
        },
      });
    }); // each contactform
  };
  var ajaxSubscribe = {
    obj: {
      subscribeEmail: $("#subscribe-email"),
      subscribeButton: $("#subscribe-button"),
      subscribeMsg: $("#subscribe-msg"),
      subscribeContent: $("#subscribe-content"),
      dataMailchimp: $("#subscribe-form").attr("data-mailchimp"),
      success_message:
        '<div class="notification_ok">Thank you for joining our mailing list! Please check your email for a confirmation link.</div>',
      failure_message:
        '<div class="notification_error">Error! <strong>There was a problem processing your submission.</strong></div>',
      noticeError: '<div class="notification_error">{msg}</div>',
      noticeInfo: '<div class="notification_error">{msg}</div>',
      basicAction: "mail/subscribe.php",
      mailChimpAction: "mail/subscribe-mailchimp.php",
    },

    eventLoad: function () {
      var objUse = ajaxSubscribe.obj;

      $(objUse.subscribeButton).on("click", function () {
        if (window.ajaxCalling) return;
        var isMailchimp = objUse.dataMailchimp === "true";

        if (isMailchimp) {
          ajaxSubscribe.ajaxCall(objUse.mailChimpAction);
        } else {
          ajaxSubscribe.ajaxCall(objUse.basicAction);
        }
      });
    },

    ajaxCall: function (action) {
      window.ajaxCalling = true;
      var objUse = ajaxSubscribe.obj;
      var messageDiv = objUse.subscribeMsg.html("").hide();
      $.ajax({
        url: action,
        type: "POST",
        dataType: "json",
        data: {
          subscribeEmail: objUse.subscribeEmail.val(),
        },
        success: function (responseData, textStatus, jqXHR) {
          if (responseData.status) {
            objUse.subscribeContent.fadeOut(500, function () {
              messageDiv.html(objUse.success_message).fadeIn(500);
            });
          } else {
            switch (responseData.msg) {
              case "email-required":
                messageDiv.html(
                  objUse.noticeError.replace(
                    "{msg}",
                    "Error! <strong>Email is required.</strong>"
                  )
                );
                break;
              case "email-err":
                messageDiv.html(
                  objUse.noticeError.replace(
                    "{msg}",
                    "Error! <strong>Email invalid.</strong>"
                  )
                );
                break;
              case "duplicate":
                messageDiv.html(
                  objUse.noticeError.replace(
                    "{msg}",
                    "Error! <strong>Email is duplicate.</strong>"
                  )
                );
                break;
              case "filewrite":
                messageDiv.html(
                  objUse.noticeInfo.replace(
                    "{msg}",
                    "Error! <strong>Mail list file is open.</strong>"
                  )
                );
                break;
              case "undefined":
                messageDiv.html(
                  objUse.noticeInfo.replace(
                    "{msg}",
                    "Error! <strong>undefined error.</strong>"
                  )
                );
                break;
              case "api-error":
                objUse.subscribeContent.fadeOut(500, function () {
                  messageDiv.html(objUse.failure_message);
                });
            }
            messageDiv.fadeIn(500);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          alert("Connection error");
        },
        complete: function (data) {
          window.ajaxCalling = false;
        },
      });
    },
  };

  //=========NICE SELECT=========
  $('.select_js').niceSelect();

  //Submenu Dropdown Toggle
  if ($('.main-header li.dropdown2 ul').length) {
    $('.main-header li.dropdown2').append('<div class="dropdown2-btn"></div>');

    //Dropdown Button
    $('.main-header li.dropdown2 .dropdown2-btn').on('click', function () {
      $(this).prev('ul').slideToggle(500);
    });

    //Disable dropdown parent link
    $('.navigation li.dropdown2 > a').on('click', function (e) {
      e.preventDefault();
    });

    //Disable dropdown parent link
    $('.main-header .navigation li.dropdown2 > a,.hidden-bar .side-menu li.dropdown2 > a').on('click', function (e) {
      e.preventDefault();
    });

    $('.price-block .features .arrow').on('click', function (e) {
      $(e.target.offsetParent.offsetParent.offsetParent).toggleClass('active-show-hidden')
    });

  }

  // Mobile Nav Hide Show
  if ($('.mobile-menu').length) {

    //$('.mobile-menu .menu-box').mCustomScrollbar();

    var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
    $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
    $('.sticky-header .main-menu').append(mobileMenuContent);

    //Hide / Show Submenu
    $('.mobile-menu .navigation > li.dropdown2 > .dropdown2-btn').on('click', function (e) {
      e.preventDefault();
      var target = $(this).parent('li').children('ul');

      if ($(target).is(':visible')) {
        $(this).parent('li').removeClass('open');
        $(target).slideUp(500);
        $(this).parents('.navigation').children('li.dropdown2').removeClass('open');
        $(this).parents('.navigation').children('li.dropdown2 > ul').slideUp(500);
        return false;
      } else {
        $(this).parents('.navigation').children('li.dropdown2').removeClass('open');
        $(this).parents('.navigation').children('li.dropdown2').children('ul').slideUp(500);
        $(this).parent('li').toggleClass('open');
        $(this).parent('li').children('ul').slideToggle(500);
      }
    });

    //3rd Level Nav
    $('.mobile-menu .navigation > li.dropdown2 > ul  > li.dropdown2 > .dropdown2-btn').on('click', function (e) {
      e.preventDefault();
      var targetInner = $(this).parent('li').children('ul');

      if ($(targetInner).is(':visible')) {
        $(this).parent('li').removeClass('open');
        $(targetInner).slideUp(500);
        $(this).parents('.navigation > ul').find('li.dropdown2').removeClass('open');
        $(this).parents('.navigation > ul').find('li.dropdown > ul').slideUp(500);
        return false;
      } else {
        $(this).parents('.navigation > ul').find('li.dropdown2').removeClass('open');
        $(this).parents('.navigation > ul').find('li.dropdown2 > ul').slideUp(500);
        $(this).parent('li').toggleClass('open');
        $(this).parent('li').children('ul').slideToggle(500);
      }
    });

    //Menu Toggle Btn
    $('.mobile-nav-toggler').on('click', function () {
      $('body').addClass('mobile-menu-visible');

    });

    //Menu Toggle Btn
    $('.mobile-menu .menu-backdrop, .close-btn').on('click', function () {
      $('body').removeClass('mobile-menu-visible');
      $('.mobile-menu .navigation > li').removeClass('open');
      $('.mobile-menu .navigation li ul').slideUp(0);
    });

    $(document).keydown(function (e) {
      if (e.keyCode === 27) {
        $('body').removeClass('mobile-menu-visible');
        $('.mobile-menu .navigation > li').removeClass('open');
        $('.mobile-menu .navigation li ul').slideUp(0);
      }
    });

  }
  var alertBox = function () {
    $(document).on('click', '.close', function (e) {
      $(this).closest('.flat-alert').remove();
      e.preventDefault();
    })
  };

  //hover Image 
  var move = 50;
  var rotate = 20;
  $(document).mousemove(function (e) {
    var docX = $(document).width();
    var docY = $(document).height();

    var moveX = (e.pageX - docX / 2) / (docX / 2) * -move;
    var moveY = (e.pageY - docY / 2) / (docY / 2) * -move;

    var rotateY = (e.pageX / docX * rotate * 2) - rotate;
    var rotateX = -((e.pageY / docY * rotate * 2) - rotate);

    $('.layer')
      .css('left', moveX + 'px')
      .css('top', moveY + 'px')
      .css('transform', 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)');
  });

  //>> Mouse Cursor Start <<//
  function mousecursor() {
    if ($("body")) {
      const e = document.querySelector(".cursor-inner"),
        t = document.querySelector(".cursor-outer");
      let n,
        i = 0,
        o = !1;
      (window.onmousemove = function (s) {
        o ||
          (t.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (e.style.transform =
            "translate(" + s.clientX + "px, " + s.clientY + "px)"),
          (n = s.clientY),
          (i = s.clientX);
      }),
        $("body").on("mouseenter", "a, .cursor-pointer", function () {
          e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
        }),
        $("body").on("mouseleave", "a, .cursor-pointer", function () {
          ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
            (e.classList.remove("cursor-hover"),
              t.classList.remove("cursor-hover"));
        }),
        (e.style.visibility = "visible"),
        (t.style.visibility = "visible");
    }
  }
  $(function () {
    mousecursor();
  });


  // Dom Ready
  $(function () {
    $(window).on('load resize', function () {
      retinaLogos();
    });
    headerFixed();
    // ajaxContactForm();
    alertBox();

  });

})(jQuery);

