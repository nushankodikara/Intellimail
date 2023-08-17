<!DOCTYPE html>
<html lang="en">

<head>
    <title>Intelli Mail</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php include 'components/admin-sidebar.php'; ?>

    <div class="p-4 sm:ml-64">

        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-semibold mb-4">
                <?php
                include 'components/server.php';
                include 'components/authCheck.php';

                $ticketid = $_GET['id'];

                $sql = "SELECT * FROM tickets WHERE id='$ticketid'";

                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);

                echo "Ticket #" . $row['id'] . " - " . $row['subject'];

                mysqli_close($conn);
                ?>
            </h1>


            <div class="bg-white rounded-md shadow p-6">

                <p class="text-gray-700 mb-4">
                    <?php echo $row['description']; ?>
                </p>
                <form action="functions/replyticketAdmin.php" method="post">
                    <?php echo '<input type="hidden" name="ticketid" value="' . $ticketid . '">'; ?>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="reply">
                            Reply
                        </label>
                        <textarea id="reply" name="reply" class="w-full border rounded-md py-2 px-3"
                            rows="4"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Reply
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php include 'components/footer.php'; ?>
    </div>
    <!-- Scripts -->
    <?php include 'components/scripts.php'; ?>
</body>

</html>