<style type="text/css">
	*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Mulish', sans-serif;}
	.nav-style{
		background-color: #990033!important; 
	}
	.nav-style a{
		color: white;
	}
	.main-header{
		height: 450px;
		width: 100%;
	}
	.right-side img{
		animation:spin 4s linear infinite;

	}
	@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

	.left-side{
		animation:heartbeat 3s linear infinite;
	}
	@keyframes heartbeat { 
		0%{
			transform: scale(.75);
		}
		20%{
			transform: scale(1);
		}
		40%{
			transform: scale(.75);
		}
		60%{
			transform: scale(1);
		}
		80%{
			transform: scale(.75);
		}
		100%{
			transform: scale(.75);
		}
	 }



	 /********* corona Update **********/

	 .corona_update{
	 	margin: 00, 30px, 0;
	 }
	 .corona_update h3{
	 	color: #ff7576;

	 }
	 .corona_update h1{
	 	font-size: 2rem; text-align: center;

	 }

	 /******* About section ******/
	 .sub-section{
	 	background-color: #fbfafd; 
	 }
	 .footer-style{
	 	background-color: #990033!important;
	 }
	 .footer-style{
	 	margin-bottom: 0!important;	 
	 }
	 
	 #button {
  display: inline-block;
  background-color: #990033;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 1px;
  transition: background-color .3s, 
  opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}
#button::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#button:hover {
  cursor: pointer;
  background-color: #333;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}

/* Styles for the content section */

.content {
  width: 77%;
  margin: 50px auto;
  font-family: 'Merriweather', serif;
  font-size: 17px;
  color: #6c767a;
  line-height: 1.9;
}
@media (min-width: 500px) {
  .content {
    width: 43%;
  }
  #button {
    margin: 30px;
  }
}

#popup {
    visibility: hidden; 
    background-color: red; 
    position: absolute;
    top: 10px;
    z-index: 100; 
    height: 100px;
    width: 300px
}
</style>