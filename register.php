<!DOCTYPE html>
<html lang="en">

<head>
    <title>Intelli Mail</title>
    <?php include 'components/head.php';
    include 'components/noauthusers.php'; ?>
</head>

<body>

    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="Pattern"
                    src="https://unsplash.com/photos/eZWGK5sIiBM/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjkxNDcwMDI2fA&force=true&w=1920"
                    class="absolute inset-0 h-full w-full object-cover" />
            </aside>

            <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">

                    <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                        Welcome to Intellimail
                    </h1>

                    <p class="mt-4 leading-relaxed text-gray-500">
                        Create your free account and join the adventure </p>

                    <?php
                    // Check if get request is set for error
                    if (isset($_GET['error'])) {
                        $error = $_GET['error'];
                        if ($error == 'emptyfields') {
                            echo '<p class="mt-4 leading-relaxed text-red-500">Please fill in all fields</p>';
                        } else if ($error == 'invalidemail') {
                            echo '<p class="mt-4 leading-relaxed text-red-500">Please enter a valid email</p>';
                        } else if ($error == 'passwordcheck') {
                            echo '<p class="mt-4 leading-relaxed text-red-500">Passwords do not match</p>';
                        } else if ($error == 'emailtaken') {
                            echo '<p class="mt-4 leading-relaxed text-red-500">Email is already taken</p>';
                        } else if ($error == 'sqlerror') {
                            echo '<p class="mt-4 leading-relaxed text-red-500">SQL Error</p>';
                        }
                    }
                    ?>

                    <form method="post" action="functions/register.php" class="mt-8 grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="FirstName" class="block text-sm font-medium text-gray-700">
                                First Name
                            </label>

                            <?php
                            // Check if get request is set
                            if (isset($_GET['firstname'])) {
                                $firstname = $_GET['firstname'];
                                echo '<input type="text" id="FirstName" name="firstname" value="' . $firstname . '"
                                    class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />';
                            } else {
                                echo '<input type="text" id="FirstName" name="firstname"
                                    class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />';
                            }
                            ?>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="LastName" class="block text-sm font-medium text-gray-700">
                                Last Name
                            </label>

                            <?php
                            // Check if get request is set
                            if (isset($_GET['lastname'])) {
                                $lastname = $_GET['lastname'];
                                echo '<input type="text" id="LastName" name="lastname" value="' . $lastname . '"
                                    class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />';
                            } else {
                                echo '<input type="text" id="LastName" name="lastname"
                                    class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />';
                            }
                            ?>
                        </div>

                        <div class="col-span-6">
                            <label for="Email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>

                            <?php
                            // Check if get request is set
                            if (isset($_GET['email'])) {
                                $email = $_GET['email'];
                                echo '<input type="email" id="Email" name="email" value="' . $email . '"
                                    class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />';
                            } else {
                                echo '<input type="email" id="Email" name="email"
                                    class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />';
                            }
                            ?>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>

                            <input type="password" id="Password" name="password"
                                class="mt-1 w-full p-2  rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                                Password Confirmation
                            </label>

                            <input type="password" id="PasswordConfirmation" name="cpassword"
                                class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>

                        <div class="col-span-6">
                            <label for="MarketingAccept" class="flex gap-4">
                                <input type="checkbox" id="MarketingAccept" name="marketing_accept"
                                    class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm" required />

                                <span class="text-sm text-gray-700">
                                    I agree to terms and conditions.
                                </span>
                            </label>
                        </div>

                        <div class="col-span-6">
                            <p class="text-sm text-gray-500">
                                By creating an account, you agree to our
                                <a href="terms-and-conditions.php" class="text-gray-700 underline">
                                    terms and conditions
                                </a>
                                and
                                <a href="privacy-policy.php" class="text-gray-700 underline">privacy policy</a>.
                            </p>
                        </div>

                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <input type="submit" value="Register"
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">

                            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                                Already have an account?
                                <a href="login.php" class="text-gray-700 underline">Log in</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
    <!-- Scripts -->
    <?php include 'components/scripts.php'; ?>
</body>

</html>