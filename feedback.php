<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <title>Let Us Know Your Feedback</title>
  </head>

  <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');



body {
  background-color: #FBF9F1; 
  font-family: 'Montserrat', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 95vh;
  padding-left:15%;
}

.panel-container {
  background-color: #E5E1DA;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Slight shadow */
  border-radius: 12px; /* Increased roundness */
  font-size: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 60px; /* Increased padding */
  max-width: 600px; /* Increased width */

}

.panel-container strong {
  line-height: 24px;
}

.ratings-container {
  display: flex;
  margin: 30px 0;

}

.rating {
  flex: 1;
  cursor: pointer;
  padding: 25px;
  margin: 10px 8px;
  background-color: #92C7CF;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.rating img {
  width: 65px; /* Slightly larger emojis */
}

.rating small {
  color: #555;
  display: inline-block;
  margin: 10px 0 0;
}

.rating.active {
  background-color: #75B2B9; 
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Increased shadow for active */
}

.btn {
  background-color: #92C7CF;
  color: #fff;
  border: 0;
  border-radius: 8px;
  padding: 14px 40px;
  cursor: pointer;
}

.btn:focus {
  outline: none;
}

.btn:active {
  transform: scale(0.98);
}

  </style>

  <body>
  <?php include 'dashboard.php';?>
    <div id="panel" class="panel-container">
      <strong>How satisfied are you with our website services?</strong>
      <div class="ratings-container">
        <div class="rating active">
          <img src="https://img.icons8.com/external-neu-royyan-wijaya/64/000000/external-emoji-neumojis-smiley-neu-royyan-wijaya-30.png" alt="Satisfied" />
          <small>Satisfied</small>
        </div>

        <div class="rating">
          <img src="https://img.icons8.com/external-neu-royyan-wijaya/64/000000/external-emoji-neumojis-smiley-neu-royyan-wijaya-3.png" alt="Neutral" />
          <small>Neutral</small>
        </div>

        <div class="rating">
          <img src="https://img.icons8.com/external-neu-royyan-wijaya/64/000000/external-emoji-neumojis-smiley-neu-royyan-wijaya-17.png" alt="Unhappy" />
          <small>Unhappy</small>
        </div>
      </div>
      <button class="btn" id="send">Send Review</button>
    </div>

    <script>
      const ratings = document.querySelectorAll('.rating');
      const ratingsContainer = document.querySelector('.ratings-container');

      ratingsContainer.addEventListener('click', (e) => {
        if (e.target.closest('.rating')) {
          removeActive(); // Remove active class from all
          e.target.closest('.rating').classList.add('active'); // Add active to clicked rating
        }
      });

      function removeActive() {
        ratings.forEach((rating) => {
          rating.classList.remove('active');
        });
      }
    </script>
  </body>
</html>
