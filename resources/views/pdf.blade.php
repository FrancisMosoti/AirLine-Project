<html>
<head>


    <style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");

$container: #e0e2e8;
$topbg: #ffcc05;
$bottombg: #fff;
$font: "Open Sans", sans-serif;
$grey: #6c6c6c;

body,
p,
h1 {
	margin: 0;
	padding: 0;
	font-family: $font;
}

.container {
	background: $container;
	position: relative;
	width: 100%;
	height: 100vh;
	.ticket {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.basic {
		display: none;
	}
}

.airline {
	display: block;
	height: 575px;
    padding: 10px;
	width: 30rem;
	box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
	border-radius: 25px;
	z-index: 3;
	.top {
		height: 220px;
		background: $topbg;
		border-top-right-radius: 25px;
		border-top-left-radius: 25px;
		h1 {
			text-transform: uppercase;
			font-size: 12px;
			letter-spacing: 2;
			text-align: center;
			position: absolute;
			top: 30px;
			left: 50%;
			transform: translateX(-50%);
		}
	}
	.bottom {
		height: 355px;
		background: $bottombg;
		border-bottom-right-radius: 25px;
		border-bottom-left-radius: 25px;
	}
}

.top {
	.big {
		position: absolute;
		top: 100px;
		font-size: 65px;
		font-weight: 700;
		line-height: 0.8;
		.from {
			color: $topbg;
			text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
		}
		.to {
			position: absolute;
			left: 32px;
			font-size: 35px;
			display: flex;
			flex-direction: row;
			align-items: center;
			i {
				margin-top: 5px;
				margin-right: 10px;
				font-size: 15px;
			}
		}
	}
	&--side {
		position: absolute;
		right: 35px;
		top: 110px;
		text-align: right;
		i {
			font-size: 25px;
			margin-bottom: 18px;
		}
		p {
			font-size: 10px;
			font-weight: 700;
		}
		p + p {
			margin-bottom: 8px;
		}
	}
}
.bottom {
	p {
		display: flex;
		flex-direction: column;
		font-size: 13px;
		font-weight: 700;
		span {
			font-weight: 400;
			font-size: 11px;
			color: $grey;
		}
	}
	.column {
		margin: 0 auto;
		width: 80%;
		padding: 2rem 0;
	}
	.row {
		display: flex;
		justify-content: space-between;
		&--right {
			text-align: right;
		}
		&--center {
			text-align: center;
		}
		&-2 {
			margin: 30px 0 60px 0;
			position: relative;
			&::after {
				content: "";
				position: absolute;
				width: 100%;
				bottom: -30px;
				left: 0;
				background: #000;
				height: 1px;
			}
		}
	}
}

.bottom {
	.bar--code {
		height: 50px;
		width: 80%;
		margin: 0 auto;
		position: relative;
		&::after {
			content: "";
			position: absolute;
			width: 6px;
			height: 100%;
			background: #000;
			top: 0;
			left: 0;
			box-shadow: 10px 0 #000, 30px 0 #000, 40px 0 #000, 67px 0 #000, 90px 0 #000,
				100px 0 #000, 180px 0 #000, 165px 0 #000, 200px 0 #000, 210px 0 #000,
				135px 0 #000, 120px 0 #000;
		}
		&::before {
			content: "";
			position: absolute;
			width: 3px;
			height: 100%;
			background: #000;
			top: 0;
			left: 11px;
			box-shadow: 12px 0 #000, -4px 0 #000, 45px 0 #000, 65px 0 #000, 72px 0 #000,
				78px 0 #000, 97px 0 #000, 150px 0 #000, 165px 0 #000, 180px 0 #000,
				135px 0 #000, 120px 0 #000;
		}
	}
}

.info {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	bottom: 10px;
	font-size: 14px;
	text-align: center;
	z-index: 1;
	a {
		text-decoration: none;
		color: #000;
		background: $topbg;
	}
}

    </style>
</head>
<body>
    <div class="container">

        <div class="ticket basic">
            <p>Admit One</p>
        </div>
    
        <div class="ticket airline">
            <div class="top">
                <h1>boarding pass</h1>
                <div class="big">
                    <p class="from">BWI</p>
                    <p class="to"><i class="fas fa-arrow-right"></i> SAN</p>
                </div>
                <div class="top--side">
                    <i class="fas fa-plane"></i>
                    <p>Baltimore</p>
                    <p>San Diego</p>
                </div>
            </div>
            <div class="bottom">
                <div class="column">
                    <div class="row row-1">
                        <p><span>Flight</span>AA2005</p>
                        <p class="row--right"><span>Gate</span>B3</p>
                    </div>
                    <div class="row row-2">
                        <p><span>Boards</span>10:25 AM</p>
                        <p class="row--center"><span>Departs</span>11:00 AM</p>
                        <p class="row--right"><span>Arrives</span>1:05 PM</p>
                    </div>
                    <div class="row row-3">
                        <p><span>Passenger</span>Jesus Ramirez</p>
                        <p class="row--center"><span>Seat</span>11E</p>
                        <p class="row--right"><span>Group</span>3</p>
                    </div>
                </div>
                <div class="bar--code"></div>
            </div>
        </div>
    
        <div class="info">
            <p>Based on <a href="https://dribbble.com/shots/11399236-Boarding-Pass" target="_blank">this</a> Dribbble from Barna Erdei</p>
        </div>
    
    </div>
</body>
</html>
