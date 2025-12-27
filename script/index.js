const outputElement = document.getElementById("online-status");
let tooltipElement = document.getElementById("online-tooltip");
const onlineTooltip =
  '<span id="online-tooltip">This is my current online status on Discord</span>';

document.addEventListener("mousemove", changeTooltipLocation);
window.setTimeout(fetchOnlineStatus, 2000); // Show first after 2 seconds
window.setInterval(fetchOnlineStatus, 10000); // Update status every 5 seconds

function fetchOnlineStatus() {
  const apiUrl = `https://status-api.m64.dev/status/get`;

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        outputElement.classList.remove("offline", "online", "dnd", "idle");
        outputElement.innerHTML = "Couldn't load status";
        outputElement.classList.add("offline");
      }
      return response.json();
    })
    .then((data) => {
      const status = Number(data.status);

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

      tooltipElement = document.getElementById("online-tooltip");
    })
    .catch((error) => {
      console.error("Error fetching status:", error);
      outputElement.classList.remove("offline", "online", "dnd", "idle");
      outputElement.innerHTML = "Couldn't load status";
      outputElement.classList.add("offline");
    });
}

function changeTooltipLocation(e) {
  if (tooltipElement == null) {
    return;
  }
  tooltipElement.style.left = e.pageX - tooltipElement.offsetWidth / 2 + "px";
  tooltipElement.style.top = e.pageY - tooltipElement.offsetHeight * 1.2 + "px";
}
