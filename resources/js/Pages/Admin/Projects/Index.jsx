import AdminLayout from "../../../Layouts/AdminLayout";
import { Link, router } from "@inertiajs/react";

export default function Index({ projects }) {

    function destroy(id) {

        if(confirm("Delete this project?")) {
            router.delete(`/admin/projects/${id}`);
        }

    }


    return (
        <AdminLayout>

            <section className="px-8 py-20">

                <div className="max-w-6xl mx-auto">


                    <div className="flex justify-between items-center mb-12">

                        <h1 className="text-5xl font-bold">
                            Projects
                        </h1>


                        <Link
                            href="/admin/projects/create"
                            className="bg-black text-white px-6 py-3 rounded-full"
                        >
                            New Project
                        </Link>

                    </div>



                    <div className="space-y-6">


                        {projects.map(project => (

                            <div
                                key={project.id}
                                className="border rounded-3xl p-6 flex justify-between items-center"
                            >


                                <div>

                                    <h2 className="text-2xl font-bold">
                                        {project.title}
                                    </h2>


                                    <p className="text-gray-500 mt-2">
                                        {project.technology}
                                    </p>

                                </div>



                                <div className="flex gap-4">


                                    <Link
                                        href={`/admin/projects/${project.id}/edit`}
                                        className="underline"
                                    >
                                        Edit
                                    </Link>


                                    <button
                                        onClick={() => destroy(project.id)}
                                        className="text-red-600"
                                    >
                                        Delete
                                    </button>


                                </div>


                            </div>

                        ))}


                    </div>


                </div>

            </section>

        </AdminLayout>
    );
}