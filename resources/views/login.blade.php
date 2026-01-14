<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | NERV System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center"
      style="background-image: url('https://4kwallpapers.com/images/walls/thumbs_3t/15699.png');">

    <!-- CARD UTAMA (TRANSPARAN, NO BLUR) -->
    <div class="flex w-[850px] max-w-full rounded-2xl overflow-hidden
    shadow-[0_0_40px_rgba(0,255,120,0.3)]
    bg-black/30 border border-white/20">

        <!-- KIRI -->
        <div class="w-1/2 hidden md:flex flex-col justify-center items-center
        bg-gradient-to-br from-[#7C00FF]/40 to-[#00FF9C]/40 border-r border-white/20">

            <h1 class="text-4xl font-bold tracking-widest text-black">
                Muzakki
            </h1>

            <p class="text-black mt-2 tracking-widest">
                PRAKTIKUM INVENTARIS
            </p>
        </div>

        <!-- KANAN -->
        <div class="w-full md:w-1/2 p-8 text-white">

            <h2 class="text-2xl font-semibold mb-6 text-[#00FF9C]">
                LOGIN ACCESS EVA SERIES
            </h2>

            <form action="/login" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="text-sm text-[#7C00FF]">Username</label>
                    <input type="text" name="username"
                        class="w-full bg-white/10 border border-[#7C00FF]
                        rounded-lg px-4 py-2 focus:outline-none
                        focus:ring-2 focus:ring-[#00FF9C]">
                </div>

                <div>
                    <label class="text-sm text-[#7C00FF]">Password</label>
                    <input type="password" name="password"
                        class="w-full bg-white/10 border border-[#7C00FF]
                        rounded-lg px-4 py-2 focus:outline-none
                        focus:ring-2 focus:ring-[#00FF9C]">
                </div>

                <button type="submit"
                    class="w-full mt-4 py-2 rounded-lg font-semibold
                    bg-gradient-to-r from-[#7C00FF] to-[#00FF9C]
                    text-black hover:opacity-90 transition">
                    ENTER SYSTEM
                </button>
            </form>

        </div>

    </div>

</body>
</html>
