import AdminLayout from "../../Layouts/AdminLayout";
import { Link } from "@inertiajs/react";

export default function Dashboard({ projectsCount, messagesCount }) {
    return (
        <AdminLayout> 
            <section className="px-8 py-24">
                <div className="max-w-6xl mx-auto">

                    <div className="mb-16">
                        <p className="uppercase tracking-[0.3em] text-sm text-gray-500">
                            Studio Moradix
                        </p>

                        <h1 className="text-6xl font-bold tracking-tight mt-4">
                            Admin Dashboard
                        </h1>

                        <p className="mt-5 text-xl text-gray-500">
                            Manage your portfolio and incoming messages.
                        </p>
                    </div>

                    <div className="grid md:grid-cols-2 gap-6">

                        <div className="border rounded-3xl p-8">
                            <p className="text-sm uppercase tracking-widest text-gray-500">
                                Projects
                            </p>

                            <p className="text-6xl font-bold mt-4">
                                {projectsCount}
                            </p>

                            <Link
                                href="/admin/projects"
                                className="inline-block mt-8 underline"
                            >
                                Manage projects →
                            </Link>
                        </div>

                        <div className="border rounded-3xl p-8">
                            <p className="text-sm uppercase tracking-widest text-gray-500">
                                Messages
                            </p>

                            <p className="text-6xl font-bold mt-4">
                                {messagesCount}
                            </p>

                            <Link
                                href="/admin/messages"
                                className="inline-block mt-8 underline"
                            >
                                View messages →
                            </Link>
                        </div>

                    </div>
                </div>
            </section>
        </AdminLayout>
    );
}