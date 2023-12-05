<link rel="stylesheet" href="/dist/output.css" />
<div class="mx-[80px] py-[24px]">
    <div class="flex justify-between items-center pb-[24px]">
        <div class="flex flex-row items-center justify-center space-x-[16px]">
            <a href="">
                <i
                    class="fa-solid fa-calculator p-2 rounded-2xl text-[#500878] hover:bg-[#500878] hover:text-white transform translate hover:scale-105 duration-200 ease-in"></i>
            </a>
            <a href="">
                <i
                    class="fa-solid fa-location-dot p-2 rounded-2xl text-[#500878] hover:bg-[#500878] hover:text-white transform translate hover:scale-105 duration-200 ease-in"></i>
            </a>
            <a href="">
                <i
                    class="fa-solid fa-phone p-2 rounded-2xl text-[#500878] hover:bg-[#500878] hover:text-white transform translate hover:scale-105 duration-200 ease-in"></i>
            </a>
        </div>
        <div class="bg-[#EFEFEF] rounded-[4px] flex items-center w-[699px] h-[42px]">
            <label class="px-[8px]" for="search"><img src="./src/assets/icons/gg_search.svg" alt="Icon"></label>
            <input class="w-full bg-transparent mr-3 focus:outline-none" type="text" id="search"
                placeholder="Ketik untuk mencari">
        </div>
        <div class="flex justify-end">
            <button class="bg-[#500878] text-white rounded-[6px] h-[42px] w-[40px] language font-myriad"
                type="button">ID</button>
            <button class="rounded-[6px] h-[42px] w-[40px] language font-myriad" type="button">EN</button>
        </div>
    </div>
    <div class="flex justify-between items-center">
        <a href="">
            <img class="w-[198px]" src="./src/assets/images/navbar/logo.png" alt="Logo">
        </a>
        <ul class="flex items-center space-x-[16px]">
            <li class="font-lola text-center w-[102px] hover:text-[#500878]">
                <a href="">Customer & Retail Banking</a>
            </li>
            <li class="font-lola text-center w-[102px] hover:text-[#500878]">
                <a href="">Enterprise Banking</a>
            </li>
            <li class="font-lola text-center w-[102px] hover:text-[#500878]">
                <a href="">E - Banking</a>
            </li>
            <li class="font-lola text-center w-[102px] hover:text-[#500878]">
                <a href="">Tentang Muamalat</a>
            </li>
            <li class="font-lola text-center w-[102px] hover:text-[#500878]">
                <a href="">Hubungi Kami</a>
            </li>
            <li class="font-lola text-center w-[102px] hover:text-[#500878]">
                <a href="">Karir</a>
            </li>
        </ul>
        <div>
            <?php if (!isset($_POST['login'])): ?>
                <form action="" method="post">
                    <button
                        class="bg-[#500878] text-white font-myriad flex items-center rounded-[6px] px-[12px] h-[48px] w-[96px]"
                        type="submiy" name="login">Masuk <img class="ml-[8px]" src="./src/assets/icons/icon_arrow-down.svg"
                            alt="Icon"></button>
                </form>
            <?php else: ?>
                <div class="relative dropdown">
                    <button class="flex items-center dropdown-button" type="button">
                        <img class="mr-[12px] rounded-full w" src="./src/assets/images/navbar/profile.png"
                            alt="Profile Picure">
                        <p>Assalamualaikum Pengguna</p>
                    </button>
                    <div
                        class="absolute hidden left-0 top-8 z-50 bg-white mt-4 divide-y divide-gray-100 rounded-lg shadow dropdown-menu">
                        <div class="px-4 py-3">
                            <span class="block text-sm font-myriad">John Doe</span>
                            <span class="block text-sm font-myriad">john@gmail.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="" class="block px-4 py-2 text-sm hover:bg-gray-100 font-myriad">Profil</a>
                            </li>
                            <li>
                                <form action="" method="post">
                                    <button
                                        class="w-full text-left px-4 py-2 text-sm font-myriad text-red-600 hover:bg-gray-100"
                                        type="submit" name="logout">Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>