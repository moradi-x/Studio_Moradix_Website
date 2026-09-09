import { Link } from "@inertiajs/react";

export default function AdminLayout({ children }) {
    return (
        <div className="min-h-screen bg-gray-50">

            <header className="border-b bg-white">
                <div className="max-w-7xl mx-auto px-8 py-6 flex justify-between items-center">

                    <Link
                        href="/admin"
                        className="text-2xl font-bold"
                    >
                        Moradix Admin
                    </Link>


                    <nav className="flex gap-6 text-sm">

                        <Link href="/admin">
                            Dashboard
                        </Link>

                        <Link href="/admin/projects">
                            Projects
                        </Link>

                        <Link href="/admin/messages">
                            Messages
                        </Link>

                        <Link
                            href="/logout"
                            method="post"
                            as="button"
                        >
                            Logout
                        </Link>

                    </nav>

                </div>
            </header>


            <main>
                {children}
            </main>

        </div>
    );
}