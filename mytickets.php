<!DOCTYPE html>
<html lang="en">

<head>
    <title>Intelli Mail</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php include 'components/clientarea-sidebar.php'; ?>

    <div class="p-4 sm:ml-64">

        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-semibold mb-8">My Tickets <a href="newticket.php"
                    class="bg-blue-500 text-sm text-white px-4 py-2 mx-4 rounded-md hover:bg-blue-600">
                    Create New Ticket
                </a></h1>

            <div class="mb-4">

            </div>

            <div class="bg-white rounded-md shadow overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ticket ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Subject
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Priority
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample ticket rows -->

                        <?php
                        include 'components/server.php';

                        $email = $_COOKIE['email'];

                        $sql = "SELECT * FROM users WHERE email='$email'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $userid = $row['id'];

                        $sql = "SELECT * FROM tickets WHERE userid='$userid'";
                        $result = mysqli_query($conn, $sql);

                        // Change background color accordingly in priority
                        while ($row = mysqli_fetch_assoc($result)) {

                            $priority = 'bg-green-500';

                            if ($row['priority'] == '2') {
                                $priority = 'bg-yellow-500';
                            } elseif ($row['priority'] == '3') {
                                $priority = 'bg-red-500';
                            }

                            echo '<tr>
                            <td class="px-6 py-4 whitespace-nowrap">' . $row['id'] . '</td>
                            <td class="px-6 py-4 text-blue-500 whitespace-nowrap"><a href="viewticket.php?id=' . $row['id'] . '">' . $row['subject'] . '</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">' . $row['status'] . '</td>
                            <td class="px-6 py-4 text-white ' . $priority . ' p-1 whitespace-nowrap">' . $row['priority'] . '</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="functions/closeticket.php?id=' . $row['id'] . '" class="text-red-500 hover:underline">Close</a>
                            </td>
                        </tr>';
                        }

                        mysqli_close($conn);

                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <?php include 'components/footer.php'; ?>
    </div>
    <!-- Scripts -->
    <?php include 'components/scripts.php'; ?>
</body>

</html>