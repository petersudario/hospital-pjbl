

<nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <span class="font-semibold text-xl tracking-tight">Sakurada Hospital</span>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <form action="toHome.php" method="POST">
                <button type="submit" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Home
                </button>
            </form>
            <form action="/hospital-pjbl/hospital-pjbl/components/toMedic.php" method="POST">
                <button type="submit" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Medics
                </button>
            </form>
            <form action="/hospital-pjbl/hospital-pjbl/components/toNurse.php" method="POST">
                <button type="submit" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Nurses
                </button>
            </form>
        </div>
    </div>
</nav>
