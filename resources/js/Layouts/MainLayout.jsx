import { Link } from '@inertiajs/react';

export default function MainLayout({ children }) {

    return (
        <>
            <header>
                <nav>
                    <Link href="/">Moradix</Link>

                    <div>
                        <Link href="/about">About</Link>
                        <Link href="/projects">Projects</Link>
                        <Link href="/contact">Contact</Link>
                    </div>
                </nav>
            </header>


            <main>
                {children}
            </main>


            <footer>
                © 2026 Moradix
            </footer>
        </>
    );
}