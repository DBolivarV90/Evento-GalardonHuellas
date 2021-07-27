    <!--DOCUMENTACION FIREBASE-->
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-firestore.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
          apiKey: "AIzaSyDlCBl1v002c_sWSZYqVkofR9bEwUjD90I",
          authDomain: "chatprueba-beb34.firebaseapp.com",
          projectId: "chatprueba-beb34",
          storageBucket: "chatprueba-beb34.appspot.com",
          messagingSenderId: "136238188018",
          appId: "1:136238188018:web:ee3f3086505100fb50176b"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>

    <script src="{{ asset('aplicacion.js') }}"></script>