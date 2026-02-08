import "./tailwind.css";
import "./custom.scss";

document.addEventListener("DOMContentLoaded", () => {
  // モバイルメニュー: リンククリック時にメニューを閉じる
  document
    .querySelectorAll<HTMLDetailsElement>("header details")
    .forEach((details) => {
      details.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
          details.removeAttribute("open");
        });
      });
    });
});
