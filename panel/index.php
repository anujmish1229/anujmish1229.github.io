<!DOCTYPE html>
<html lang="en">
<?php
include('../header.php') ?>
<body>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCSOKHq7MCPtISyh8N3V7Y4kJCx3S4wSfg",
    authDomain: "seniorbuddies-0.firebaseapp.com",
    projectId: "seniorbuddies-0",
    storageBucket: "seniorbuddies-0.firebasestorage.app",
    messagingSenderId: "153228474132",
    appId: "1:153228474132:web:a39be39056ff7a957b7401",
    measurementId: "G-YQM5KB1H2T"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
</body>
<?php
include('../footer.php') ?>
</html>