import Swup from "https://unpkg.com/swup@4.8.2/dist/Swup.module.js?module";
const swup = new Swup({
  containers: ["#swup"]
});
swup.hooks.on('visit:start', () => {
  console.log(globalThis.location.href);
})