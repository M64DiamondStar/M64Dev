window.onload = function () {
  const apiUrl = `https://status-api.m64.dev/status/get`;
  const outputElement = document.getElementById("online-status");

  fetch(apiUrl)
    .then((response) => {
      if (!response.ok) throw new Error("Network response was not ok");
      return response.json();
    })
    .then((data) => {
      const status = Number(data.status);
      console.log("Status API returned:", status);

      // Remove all status classes
      outputElement.classList.remove("offline", "online", "dnd", "idle");

      // Add class based on status
      switch (status) {
        case 1: // ONLINE
          outputElement.classList.add("online");
          break;
        case 2: // DO_NOT_DISTURB
          outputElement.classList.add("dnd");
          break;
        case 3: // IDLE
          outputElement.classList.add("idle");
          break;
        default:
          outputElement.classList.add("offline");
          break;
      }
    })
    .catch((error) => console.error("Error fetching status:", error));
};
