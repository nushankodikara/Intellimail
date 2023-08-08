<!DOCTYPE html>
<html lang="en">

<head>
    <title>Intelli Mail</title>
    <?php include 'components/head.php'; ?>
</head>

<body>

    <section class="bg-white">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt="Pattern"
                    src="https://unsplash.com/photos/jIBMSMs4_kA/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjkxNDY5NzYxfA&force=true&w=1920"
                    class="absolute inset-0 h-full w-full object-cover" />
            </aside>

            <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">

                    <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                        Welcome to Back!
                    </h1>

                    <p class="mt-4 leading-relaxed text-gray-500">
                        Let's login to your account </p>

                    <form action="#" class="mt-8 grid grid-cols-6 gap-6">
                        <div class="col-span-6">
                            <label for="Email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>

                            <input type="email" id="Email" name="email"
                                class="mt-1 w-full p-2 rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>

                        <div class="col-span-6">
                            <label for="Password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>

                            <input type="password" id="Password" name="password"
                                class="mt-1 w-full p-2  rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
                        </div>


                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <input type="submit" value="Log In"
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">

                            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                                Don't have an account?
                                <a href="register.php" class="text-gray-700 underline">Register</a>.
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