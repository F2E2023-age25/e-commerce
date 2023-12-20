// hamburgur
    let forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(let c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(let e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    let hamburgers = document.querySelectorAll(".hamburger");
    let hamList = document.querySelector(".hamburger-list");
    
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburgers) {
        hamburgers.addEventListener("click", function() {
          if (hamburgers.classList.contains("is-active") === true) {
            hamList.classList.add("share-animation-back");
            hamList.classList.remove("share-animation");
            this.classList.remove("is-active");
            setTimeout(
              'hamList.classList.remove("share-animation-back")',
              2000
            );
          } else {
            this.classList.add("is-active");
            hamList.classList.add("share-animation");
            hamList.classList.remove("share-animation-back");
          }
          // this.classList.toggle("is-active");
          // hamList.classList.toggle("is-active");
        }
        // , false
        );
      });
    }

// logo hover到變色(用jQuery)
