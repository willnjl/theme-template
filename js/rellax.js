let Rellax = require("rellax");
((d, w) => {
  if (d.querySelector(".rellax")) {
    let rellax = false;

    const options = {
      centering: true,
    };
    if (w.matchMedia("(min-width: 600px)").matches) {
      rellax = new Rellax(".rellax", options);
    }

    let removeRellax = (w, rellax) => {
      if (w.matchMedia("(max-width: 600px)").matches) {
        rellax.destroy();
        rellaxExists = false;
      } else {
        if (rellax) {
          rellax.refresh();
        } else {
          rellax = new Rellax(".rellax", options);
        }
      }
    };

    w.addEventListener("resize", () => removeRellax(w, rellax));
    w.addEventListener("load", () => removeRellax(w, rellax));
  }
})(document, window);
