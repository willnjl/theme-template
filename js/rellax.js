let Rellax = require("rellax");
((d, w) => {
  if (d.querySelector(".rellax")) {
    let rellax = false;

    if (w.matchMedia("(min-width: 600px)").matches) {
      rellax = new Rellax(".rellax", {
        center: true,
      });
    }

    let removeRellax = (w, rellax) => {
      if (w.matchMedia("(max-width: 600px)").matches) {
        rellax.destroy();
        rellaxExists = false;
      } else {
        if (rellax) {
          rellax.refresh();
        } else {
          rellax = new Rellax(".rellax", {
            center: true,
          });
        }
      }
    };

    w.addEventListener("resize", () => removeRellax(w, rellax));
    w.addEventListener("load", () => removeRellax(w, rellax));
  }
})(document, window);
