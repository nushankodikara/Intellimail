<!DOCTYPE html>
<html lang="en">

<head>
    <title>Intelli Mail</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section
        class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')] mt-16">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <a href="download.php"
                class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                    class="text-sm font-medium">Beta version 0.2 released!</span>
                <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </a>
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Automate Your Inbox</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Let's
                automate your boring old email inboxes to a new level with a twist of Artificial Intelligence. Want to
                konw how you can do it? Join
                Us.</p>
            <form class="w-full max-w-md mx-auto" method="get" action="register.php">
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email
                    sign-up</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="email" id="default-email" name="email"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter your email here..." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                        up</button>
                </div>
            </form>
        </div>
        <div
            class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
        </div>
    </section>

    <!-- Timeline -->

    <section class="bg-white dark:bg-gray-900 py-32 px-16 text-gray-900 dark:text-white">
        <h1 class="text-4xl text-center pb-10 font-bold capitalize">our Project is growing with you!</h1>

        <ol class="relative border-l border-gray-200 dark:border-gray-700">
            <li class="mb-10 ml-4">
                <div
                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">August
                    2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Beta Release 0.2</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Alot of bug fixes and performance
                    increases. Feedback sections were active and we collect your feedback through github.</p>
                <a href="download.php"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Download<svg
                        class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg></a>
            </li>
            <li class="mb-10 ml-4">
                <div
                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">July 2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Beta Release 0.1</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Intergrated AI features and automated
                    mail management actions. Our development team is now available through Discord.</p>
            </li>
            <li class="ml-4">
                <div
                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Project Fund Raise</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">We have successfully completed our
                    initial fund raise campaign to support the email management project. Community is everything to us.
                </p>
            </li>
        </ol>
    </section>

    <!-- Features -->
    <section class="bg-gray-900 text-white">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">Feature Rich Email Manager</h2>

                <p class="mt-4 text-gray-300">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur
                    aliquam doloribus nesciunt eos fugiat. Vitae aperiam fugit consequuntur
                    saepe laborum.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-blue-500/10 hover:shadow-blue-500/10"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Smart Reply</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Suggests quick responses based on the email content.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-blue-500/10 hover:shadow-blue-500/10"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Email Classification</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Automatically categorizes emails into different folders.

                    </p>
                </a>

                <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-blue-500/10 hover:shadow-blue-500/10"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Email Prioritization</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Prioritizes emails based on their importance.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-blue-500/10 hover:shadow-blue-500/10"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Email Summarization</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Summarizes long emails into shorter ones.
                    </p>
                </a>

                <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-blue-500/10 hover:shadow-blue-500/10"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Email Scheduling</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Allows users to schedule emails to be sent at a later time.

                    </p>
                </a>

                <a class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-blue-500/10 hover:shadow-blue-500/10"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>

                    <h2 class="mt-4 text-xl font-bold text-white">Email Insights</h2>

                    <p class="mt-1 text-sm text-gray-300">
                        Provides insights into email usage patterns and habits.

                    </p>
                </a>
            </div>

        </div>
    </section>

    <!-- Plans -->
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                <div class="grid p-6 bg-gray-100 rounded place-content-center sm:p-8">
                    <div class="max-w-md mx-auto text-center lg:text-left">
                        <header>
                            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Pricing Plans</h2>

                            <p class="mt-4 text-gray-500">
                                We hate payment subscriptions as you do, but we need to keep the project alive. Servers
                                and AI costs some money to run. Staying true to our Words! we give you the best price we
                                can offer!
                            </p>
                        </header>

                        <a href="pricing.php"
                            class="inline-block px-12 py-3 mt-8 text-sm font-medium text-white transition bg-gray-900 border border-gray-900 rounded hover:shadow focus:outline-none focus:ring">
                            View All Pricing Plans
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:py-8">
                    <ul class="grid grid-cols-2 gap-4">
                        <li>
                            <a href="#" class="block group">
                                <img src="https://unsplash.com/photos/GopRYASfsOc/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjkxNDY4OTMzfA&force=true&w=640"
                                    alt="" class="object-cover w-full rounded aspect-square" />

                                <div class="mt-3">
                                    <h3
                                        class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Starter Plan
                                    </h3>

                                    <p class="mt-1 text-sm text-gray-700">$29 / month</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block group">
                                <img src="https://unsplash.com/photos/GopRYASfsOc/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjkxNDY4OTMzfA&force=true&w=640"
                                    alt="" class="object-cover w-full rounded aspect-square" />

                                <div class="mt-3">
                                    <h3
                                        class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                        Company Plan
                                    </h3>

                                    <p class="mt-1 text-sm text-gray-700">$99 / month</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
    <!-- Scripts -->
    <?php include 'components/scripts.php'; ?>
</body>

</html>