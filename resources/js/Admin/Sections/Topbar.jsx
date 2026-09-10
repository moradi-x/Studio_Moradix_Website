export default function Topbar() {

    return (

        <header className="bg-white border-b px-6 py-4">


            <div className="flex items-center justify-between">


                {/* Brand + Notification */}

                <div className="flex items-center gap-5">


                    <h1 className="text-xl font-bold text-gray-800">
                        Moradix Studio
                    </h1>


                    <button
                        className="text-xl hover:text-green-600 transition"
                    >
                        🔔
                    </button>


                </div>



                {/* Search Center */}

                <div className="flex-1 max-w-xl mx-10">


                    <input
                        type="text"
                        placeholder="Search..."
                        className="
                            w-full
                            border
                            rounded-lg
                            px-4
                            py-2
                            focus:outline-none
                            focus:ring-2
                            focus:ring-green-500
                        "
                    />


                </div>


                {/* Empty Right Side */}

                <div className="w-32">
                </div>


            </div>


        </header>

    );

}