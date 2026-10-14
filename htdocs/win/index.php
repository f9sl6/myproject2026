
<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php';  ?>

<style>
    body {
        background-color: #f8f9fa;
        font-family: "Tahoma", sans-serif;
    }

    .hero {
        position: relative;
        min-height: 420px;
        border-radius: 25px;
        overflow: hidden;
        margin-top: 25px;
        margin-bottom: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        background:
            linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
            url("https://www.almosafer.com/image/hotels?url=http%3A%2F%2Fhotelcms-contents-live.almosafer.com%2F63aa09f4-1945-490e-a6cc-d7d15dee94ec.jpg&w=3840&q=75")
            center/cover;
    }

    .hero-content {
        max-width: 800px;
        padding: 30px;
    }

    .hero h1 {
        font-size: 42px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 20px;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .hero .btn {
        padding: 12px 35px;
        border-radius: 50px;
        font-size: 18px;
        font-weight: bold;
    }

    .section-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-title h2 {
        font-weight: bold;
        color: #212529;
    }

    .section-title p {
        color: #777;
    }

    .services {
        margin-bottom: 60px;
    }

    .service-card {
        height: 100%;
        border: none;
        border-radius: 18px;
        background: white;
        padding: 25px 15px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
        transition: 0.3s;
    }

    .service-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    }

    .service-icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .service-card h5 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .service-card p {
        color: #777;
        margin: 0;
    }

    .breakfast {
        background: linear-gradient(135deg, #fff8e1, #ffffff);
        border-radius: 22px;
        padding: 40px 20px;
        text-align: center;
        margin-bottom: 60px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    }

    .breakfast h3 {
        font-weight: bold;
        color: #9a6b00;
        margin-bottom: 15px;
    }

    #countdown {
        font-size: 48px;
        font-weight: bold;
        color: #0d6efd !important;
        margin: 15px 0;
    }

    #breakfast-message {
        font-weight: bold;
        color: #198754;
    }

    .form-section {
        background: white;
        border-radius: 22px;
        padding: 35px;
        margin-bottom: 60px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
    }

    .form-section h3 {
        text-align: center;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 12px;
        padding: 12px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.12);
    }

    .form-section button {
        width: 100%;
        padding: 12px;
        border-radius: 12px;
        font-weight: bold;
        font-size: 17px;
    }

    .users-section {
        margin-bottom: 60px;
    }

    .user-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
        background: white;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
        transition: 0.3s;
    }

    .user-card:hover {
        transform: translateY(-5px);
    }

    .user-card .card-body {
        padding: 25px;
    }

    .user-card .card-title {
        font-weight: bold;
        color: #212529;
        margin-bottom: 15px;
    }

    .user-card .card-text {
        color: #666;
    }

    @media (max-width: 768px) {
        .hero {
            min-height: 380px;
            border-radius: 18px;
        }

        .hero h1 {
            font-size: 30px;
        }

        .hero p {
            font-size: 16px;
        }

        #countdown {
            font-size: 38px;
        }

        .form-section {
            padding: 25px 18px;
        }
    }

.draw-content {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #eee;
}

.draw-text {
    font-size: 18px;
    font-weight: bold;
    color: #555;
    margin-bottom: 20px;
}

#drawButton {
    padding: 13px 28px;
    border-radius: 12px;
    font-size: 17px;
    font-weight: bold;
    border: none;
}

#drawButton:hover {
    transform: translateY(-2px);
}

#drawButton:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

#drawResult {
    margin-top: 25px;
    min-height: 55px;
    font-size: 28px;
    font-weight: bold;
    color: #0d6efd;
}

</style>


<main class="container">

    <section class="hero">
        <div class="hero-content">

            <h1>مرحبًا بكم في فندق اللؤلؤة</h1>

            <p>
                استمتع بإقامة مريحة ومميزة مع أفضل الخدمات والمرافق،
                واحجز غرفتك الآن لتعيش تجربة لا تُنسى.
            </p>

            <a class="btn btn-primary" href="#booking" role="button">
                احجز الان »
            </a>

        </div>
    </section>


    <section class="services">

        <div class="section-title">
            <h2>خدمات ومرافق الفندق</h2>
            <p>نوفر لك كل ما تحتاجه لإقامة مريحة ومميزة</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4 col-lg">
                <div class="service-card">
                    <div class="service-icon">🛏️</div>
                    <h5>غرف وأجنحة فاخرة</h5>
                    <p>غرف وأجنحة فاخرة ومريحة</p>
                </div>
            </div>

            <div class="col-md-4 col-lg">
                <div class="service-card">
                    <div class="service-icon">🍽️</div>
                    <h5>مطعم الفندق</h5>
                    <p>مطعم يقدم أشهى المأكولات</p>
                </div>
            </div>

            <div class="col-md-4 col-lg">
                <div class="service-card">
                    <div class="service-icon">🏊</div>
                    <h5>المسبح والترفيه</h5>
                    <p>مسبح ومرافق ترفيهية</p>
                </div>
            </div>

            <div class="col-md-6 col-lg">
                <div class="service-card">
                    <div class="service-icon">📶</div>
                    <h5>إنترنت مجاني</h5>
                    <p>خدمة إنترنت مجانية وسريعة</p>
                </div>
            </div>

            <div class="col-md-6 col-lg">
                <div class="service-card">
                    <div class="service-icon">🅿️</div>
                    <h5>مواقف سيارات</h5>
                    <p>مواقف سيارات مجانية للنزلاء</p>
                </div>
            </div>

        </div>

    </section>


<section class="breakfast">

    <h3>🍳 الفطور</h3>

    <p>باقي على بدء الفطور:</p>

    <h2 id="countdown" class="text-primary">00:00:00</h2>

    <p id="breakfast-message">
        🔍 البوفيه يفتح الساعة 6:00 صباحًا
    </p>

    <div class="draw-content">

        <p class="draw-text">
            🎁 أدخل السحب الآن، وقد تكون أنت الفائز بالفطور المجاني!
        </p>

        <button
            type="button"
            id="drawButton"
            class="btn btn-warning"
        >
            🎉 ادخل السحب على الفطور المجاني
        </button>

        <div id="drawResult">
            اضغط على الزر لبدء السحب 🎲
        </div>

    </div>

</section>




    <section class="form-section" id="booking">

        <h3>📝 الرجاء إدخال معلوماتك</h3>

        <form action="index.php" method="POST">

            <div class="mb-4">
                <label for="firstname" class="form-label">
                    الاسم الاول
                </label>

                <input
                    type="text"
                    name="firstname"
                    class="form-control"
                    id="firstname"
                    value="<?php echo $firstname ?>"
                    aria-describedby="firstnameHelp"
                >

                <div id="firstnameHelp" class="form-text">
                    <?php echo $errors['firstnameError']?>
                </div>
            </div>


            <div class="mb-4">
                <label for="lastname" class="form-label">
                    الاسم الاخير
                </label>

                <input
                    type="text"
                    name="lastname"
                    class="form-control"
                    id="lastname"
                    value="<?php echo $lastname ?>"
                    aria-describedby="lastnameHelp"
                >

                <div id="lastnameHelp" class="form-text">
                    <?php echo $errors['lastnameError']?>
                </div>
            </div>


            <div class="mb-4">
                <label for="email" class="form-label">
                    ادخل الايميل
                </label>

                <input
                    type="text"
                    name="email"
                    class="form-control"
                    id="email"
                    value="<?php echo $email ?>"
                    aria-describedby="emailHelp"
                >

                <div id="emailHelp" class="form-text">
                    <?php echo $errors['emailError']?>
                </div>
            </div>


            <button
                type="submit"
                name="submit"
                class="btn btn-primary"
            >
                ارسال
            </button>

        </form>

    </section>


    <section class="users-section">

        <div class="section-title">
            <h2>النزلاء المسجلون</h2>
            <p>معلومات النزلاء المسجلين في الفندق</p>
        </div>

        <div class="row g-4">

            <?php foreach ($userss as $user): ?>

                <div class="col-md-4">

                    <div class="card user-card h-100">

                        <div class="card-body">

                            <h5 class="card-title">
                                <?= htmlspecialchars($user['firstname']) ?>
                                <?= htmlspecialchars($user['lastname']) ?>
                            </h5>

                            <p class="card-text">
                                📧 <?= htmlspecialchars($user['email']) ?>
                            </p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>

</main>
<script>

    const countdown = document.getElementById("countdown");
    const message = document.getElementById("breakfast-message");

    function updateCountdown() {

        const now = new Date();

        let breakfast = new Date();

        breakfast.setHours(6, 0, 0, 0);

        if (now >= breakfast) {
            breakfast.setDate(breakfast.getDate() + 1);
        }

        const difference = breakfast - now;

        const hours = Math.floor(
            difference / (1000 * 60 * 60)
        );

        const minutes = Math.floor(
            (difference % (1000 * 60 * 60)) / (1000 * 60)
        );

        const seconds = Math.floor(
            (difference % (1000 * 60)) / 1000
        );

        countdown.textContent =
            String(hours).padStart(2, "0") + ":" +
            String(minutes).padStart(2, "0") + ":" +
            String(seconds).padStart(2, "0");

        message.textContent =
            "🍳 البوفيه يفتح الساعة 6:00 صباحًا";
    }

    updateCountdown();

    setInterval(updateCountdown, 1000);

</script>
<script>

    const users = <?php echo json_encode(
        array_map(function($user) {
            return $user['firstname'] . ' ' . $user['lastname'];
        }, $userss),
        JSON_UNESCAPED_UNICODE
    ); ?>;


    const drawButton = document.getElementById("drawButton");
    const drawResult = document.getElementById("drawResult");


    drawButton.addEventListener("click", function () {

        if (users.length === 0) {

            drawResult.textContent =
                "لا يوجد أسماء مسجلة للسحب ❌";

            return;
        }


       
        drawButton.disabled = true;

        drawResult.textContent = "🎲 جاري السحب...";


        let counter = 0;


        const drawAnimation = setInterval(function () {

            const randomIndex =
                Math.floor(Math.random() * users.length);

            drawResult.textContent =
                "🎲 " + users[randomIndex];


            counter++;


            if (counter >= 30) {

                clearInterval(drawAnimation);


                const winnerIndex =
                    Math.floor(Math.random() * users.length);

                const winner =
                    users[winnerIndex];


                drawResult.textContent =
                    "🎉 " + winner;


                drawButton.disabled = false;

            }

        }, 100);

    });

</script>


<?php include_once './parts/footer.php'; ?>


