<!DOCTYPE html>
<html lang="en">

<head>
    <title>Intelli Mail</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php include 'components/header.php'; ?>


    <section
        class="bg-center bg-no-repeat bg-[url('https://unsplash.com/photos/Evw7_g2qn_g/download?ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNjkxODA5MjM1fA&force=true&w=1920')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                About Us</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">At IntelliMail, we're
                dedicated to revolutionizing the way you manage emails. Our cutting-edge AI technology streamlines your
                communication process, making your work more efficient and effective.</p>
        </div>
    </section>

    <section class="bg-gradient-to-b from-blue-600 to-blue-800 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">Our Vision & Mission</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Vision -->
                <div class="p-8 bg-white bg-opacity-10 rounded-lg shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">Our Vision</h3>
                    <p class="text-gray-200 leading-relaxed">
                        To be the leading innovator in email technology, enhancing productivity and simplifying
                        communication through cutting-edge AI solutions.
                    </p>
                </div>

                <!-- Mission -->
                <div class="p-8 bg-white bg-opacity-10 rounded-lg shadow-xl">
                    <h3 class="text-xl font-semibold mb-4">Our Mission</h3>
                    <p class="text-gray-200 leading-relaxed">
                        We are committed to delivering AI-powered email management tools that empower individuals and
                        businesses, streamlining their communication and optimizing their workflow.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection
                    of
                    open-source web components and elements built with the utility classes from Tailwind</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">

                <?php
                include 'components/server.php';

                // Get team members
                $sql = "SELECT * FROM team";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $position = $row['position'];
                    $description = $row['description'];
                    $image = $row['image'];

                    echo '<div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg max-w-xs aspect-square object-cover"
                            src="' . $image . '"
                            alt="' . $name . '">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">' . $name . '</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">' . $position . '</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">' . $description . '</p>
                    </div></div>';
                }

                ?>
            </div>
        </div>
        </div>
    </section>


    <?php include 'components/footer.php'; ?>
    <!-- Scripts -->
    <?php include 'components/scripts.php'; ?>
</body>

</html>