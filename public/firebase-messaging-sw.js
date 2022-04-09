
// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
firebase.initializeApp({
    apiKey: "AIzaSyBL3K8-d2JtzXBpk7XCdjW4Z5SLJmNjUoc",
    authDomain: "meez-76e63.firebaseapp.com",
    projectId: "meez-76e63",
    storageBucket: "meez-76e63.appspot.com",
    messagingSenderId: "390563989847",
    appId: "1:390563989847:web:a0aba175cc30dd420c9612",
    measurementId: "G-DLT6JDWLQ9"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();




messaging.onBackgroundMessage((payload) => {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    const notificationTitle = 'Background Message Title';
    const notificationOptions = {
        body: 'Background Message body.',
        icon: '/firebase-logo.png'
    };

});

