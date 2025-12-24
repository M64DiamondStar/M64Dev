const outputElement = document.getElementById("online-status");
const tooltipElement = document.getElementById("online-tooltip");
const onlineTooltip =
  '<span id="online-tooltip">This is my current online status on Discord</span>';

document.addEventListener("mousemove", changeTooltipLocation);

window.onload = function () {
  const apiUrl = `https://status-api.m64.dev/status/get`;

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) throw new Error("Network response was not ok");
      return response.json();
    })
    .then((data) => {
      const status = Number(data.status);
      console.log("Status API returned:", status);
      console.log("Element:", outputElement);
      console.log("Classes before:", outputElement.className);

      // Remove all status classes
      outputElement.classList.remove("offline", "online", "dnd", "idle");

      // Add class based on status
      switch (status) {
        case 1: // ONLINE
          outputElement.classList.add("online");
          outputElement.innerHTML = "Online" + onlineTooltip;
          break;
        case 2: // DO_NOT_DISTURB
          outputElement.classList.add("dnd");
          outputElement.innerHTML = "Do not disturb" + onlineTooltip;
          break;
        case 3: // IDLE
          outputElement.classList.add("idle");
          outputElement.innerHTML = "Idle" + onlineTooltip;
          break;
        default:
          outputElement.classList.add("offline");
          outputElement.innerHTML = "Offline" + onlineTooltip;
          break;
      }

      // Force a re-render
      void outputElement.offsetHeight;
    })
    .catch((error) => console.error("Error fetching status:", error));
};

function changeTooltipLocation(e) {
  tooltipElement.style.left = e.pageX - tooltipElement.offsetWidth / 2 + "px";
  tooltipElement.style.top = e.pageY - tooltipElement.offsetHeight * 1.2 + "px";
}
