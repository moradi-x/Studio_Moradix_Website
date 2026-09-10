import { Link } from "@inertiajs/react";


export default function Sidebar() {

    return (

        <aside className="w-64 bg-white border-r min-h-screen p-5 flex flex-col">


            <div>

                <h2 className="text-2xl font-bold text-gray-800 mb-8">
                    Moradix
                </h2>


                <nav className="flex flex-col gap-2">


                    <Link
                        href="#"
                        className="px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition"
                    >
                        Dashboard
                    </Link>


                    <Link
                        href={route('admin.categories.index')}
                        className="
        px-4
        py-3
        rounded-lg
        text-gray-700
        hover:bg-green-50
        hover:text-green-600
        transition
    "
                    >
                        Categories
                    </Link>


                    <Link
                        href="#"
                        className="px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition"
                    >
                        Projects
                    </Link>


                    <Link
                        href="#"
                        className="px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition"
                    >
                        Technologies
                    </Link>


                    <Link
                        href="#"
                        className="px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition"
                    >
                        Services
                    </Link>


                    <Link
                        href="#"
                        className="px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition"
                    >
                        Requests
                    </Link>


                    <Link
                        href="#"
                        className="px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-600 transition"
                    >
                        Settings
                    </Link>


                </nav>

            </div>



            <div className="mt-auto pt-5 border-t">


                <Link
                    href="/logout"
                    method="post"
                    as="button"
                    className="
                        w-full
                        text-left
                        px-4
                        py-3
                        rounded-lg
                        text-gray-700
                        hover:bg-red-50
                        hover:text-red-600
                        transition
                    "
                >

                    Logout

                </Link>


            </div>


        </aside>

    );

}