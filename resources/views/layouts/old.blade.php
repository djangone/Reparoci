<html>
<script>
    var drawercartRightSide = document.getElementById("drawercartRightSide");
    if (drawercartRightSide) {
        drawercartRightSide.addEventListener("click", function (e) {
            var popup = e.currentTarget.parentNode;
            function isOverlay(node) {
                return !!(
                    node &&
                    node.classList &&
                    node.classList.contains("popup-overlay")
                );
            }
            while (popup && !isOverlay(popup)) {
                popup = popup.parentNode;
            }
            if (isOverlay(popup)) {
                popup.style.display = "none";
            }
        });
    }

    var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
    var observer = new IntersectionObserver(
        (entries) => {
            for (const entry of entries) {
                if (entry.isIntersecting || entry.intersectionRatio > 0) {
                    const targetElement = entry.target;
                    targetElement.classList.add("animate");
                    observer.unobserve(targetElement);
                }
            }
        },
        {
            threshold: 0.15,
        }
    );

    for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
    }

    var drawerButton = document.getElementById("drawerButton");
    if (drawerButton) {
        drawerButton.addEventListener("click", function () {
            var drawerOverlay = document.getElementById("leftSideMenu");
            if (!drawerOverlay) return;
            var drawerOverlayStyle = drawerOverlay.style;
            if (drawerOverlayStyle) {
                drawerOverlayStyle.display = "flex";
                drawerOverlayStyle.zIndex = 99;
                drawerOverlayStyle.backgroundColor = "";
                drawerOverlayStyle.alignItems = "flex-start";
                drawerOverlayStyle.justifyContent = "";
            }
            drawerOverlay.setAttribute("closable", "");

            var onClick =
                drawerOverlay.onClick ||
                function (e) {
                    if (
                        e.target === drawerOverlay &&
                        drawerOverlay.hasAttribute("closable")
                    ) {
                        drawerOverlayStyle.display = "none";
                    }
                };
            drawerOverlay.addEventListener("click", onClick);
        });
    }

    var shoppingCart = document.getElementById("shoppingCart");
    if (shoppingCart) {
        shoppingCart.addEventListener("click", function () {
            var drawerOverlay = document.getElementById("cartRightSide");
            if (!drawerOverlay) return;
            var drawerOverlayStyle = drawerOverlay.style;
            if (drawerOverlayStyle) {
                drawerOverlayStyle.display = "flex";
                drawerOverlayStyle.zIndex = 99;
                drawerOverlayStyle.backgroundColor = "";
                drawerOverlayStyle.alignItems = "flex-end";
                drawerOverlayStyle.justifyContent = "";
            }
            drawerOverlay.setAttribute("closable", "");

            var onClick =
                drawerOverlay.onClick ||
                function (e) {
                    if (
                        e.target === drawerOverlay &&
                        drawerOverlay.hasAttribute("closable")
                    ) {
                        drawerOverlayStyle.display = "none";
                    }
                };
            drawerOverlay.addEventListener("click", onClick);
        });
    }
</script>
</html>
