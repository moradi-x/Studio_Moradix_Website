import { Link } from '@inertiajs/react';

export default function Navbar() {

    return (
        <nav className="w-full flex justify-between items-center px-8 py-6">

            <Link 
                href="/"
                className="text-2xl font-bold"
            >
                Moradix
            </Link>


            <div className="flex gap-8">

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
    );
}