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
            <h1 class="text-2xl font-semibold mb-4">Create New Ticket</h1>

            <form action="functions/createticket.php" method="post" class="bg-white rounded-md shadow p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="subject">
                        Subject
                    </label>
                    <input type="text" id="subject" name="subject" class="w-full border rounded-md py-2 px-3">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="department">
                        Department
                    </label>
                    <select id="department" name="department" class="w-full border rounded-md py-2 px-3">
                        <option value="1">Sales</option>
                        <option value="2">Support</option>
                        <option value="3">Billing</option>
                    </select>
                </div>

                <!-- Priority -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="priority">
                        Priority
                    </label>
                    <select id="priority" name="priority" class="w-full border rounded-md py-2 px-3">
                        <option value="1">Low</option>
                        <option value="2">Medium</option>
                        <option value="3">High</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea id="description" name="description" class="w-full border rounded-md py-2 px-3"
                        rows="4"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Create Ticket
                    </button>
                </div>
            </form>
        </div>

        <?php include 'components/footer.php'; ?>
    </div>
    <!-- Scripts -->
    <?php include 'components/scripts.php'; ?>
</body>

</html>