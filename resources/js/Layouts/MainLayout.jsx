import { Link } from "@inertiajs/react";


export default function MainLayout({children}) {

    return (

        <div className="min-h-screen bg-white text-black">


            <header className="px-8 py-8">

                <nav className="max-w-6xl mx-auto flex justify-between items-center">


                    <Link
                        href="/"
                        className="text-2xl font-bold tracking-tight"
                    >
                        Moradix
                    </Link>


                    <div className="flex gap-8 text-sm">


                        <Link href="/about">
                            About
                        </Link>


                        <Link href="/projects">
                            Projects
                        </Link>


                        <Link href="/contact">
                            Contact
                        </Link>


                    </div>


                </nav>


            </header>



            <main>
                {children}
            </main>



            <footer className="px-8 py-12 border-t mt-20">

                <div className="max-w-6xl mx-auto">

                    © 2026 Studio Moradix

                </div>

            </footer>


        </div>

    );
}