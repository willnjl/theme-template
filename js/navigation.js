((d, w) => {
  const header = d.querySelector("header");
  const navMask = d.querySelector("#nav-mask");
  let y = w.scrollY;

  let scrolling = false;
  w.addEventListener("scroll", () => {
    scrolling = !scrolling;

    setTimeout(() => {
      scrolling = false;
    }, 800);

    y = w.scrollY;
    if (y < 10) {
      navMask.classList.remove("mask");
    } else {
      navMask.classList.add("mask");
    }
  });

  header.addEventListener("mouseenter", () => {
    header.classList.add("nav-down");
  });

  const btn = d.getElementById("navicon");
  const body = d.querySelector("body");
  const siteNavigation = header;
  let className = "sidenav-open";
  let open = false;

  const toggleMenu = () => {
    open = !open;
    if (open) {
      body.classList.add(className);
      btn.classList.add("is-active");
    } else {
      body.classList.remove(className);
      btn.classList.remove("is-active");
    }
  };

  btn.addEventListener("click", () => {
    toggleMenu();
  });

  const sidenav = d.getElementById("primary-menu");
  document.addEventListener("click", function (event) {
    const isClickInside = siteNavigation.contains(event.target);
    const isClickLink = sidenav.contains(event.target);
    if (isClickLink || !isClickInside) {
      body.classList.remove(className);
      btn.classList.remove("is-active");
    }
  });
})(document, window);
