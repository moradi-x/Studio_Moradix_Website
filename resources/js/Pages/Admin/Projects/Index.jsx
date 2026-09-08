import MainLayout from "../../../Layouts/MainLayout";
import { Link, router } from "@inertiajs/react";

export default function Index({ projects }) {


    return (

        <MainLayout>


            <section className="px-8 py-24">


                <div className="max-w-5xl mx-auto">


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


                        {projects.map((project) => (


                            <div
                                key={project.id}
                                className="border rounded-2xl p-6 flex justify-between"
                            >


                                <div>

                                    <h2 className="text-2xl font-bold">
                                        {project.title}
                                    </h2>


                                    <p className="mt-2 text-gray-600">
                                        {project.description}
                                    </p>

                                </div>


                                <div>

                                    <Link
                                        href={`/admin/projects/${project.id}/edit`}
                                        className="underline"
                                    >
                                        Edit
                                    </Link>


                                    <button
                                        onClick={() => router.delete(`/admin/projects/${project.id}`)}
                                        className="ml-5 text-red-600"
                                    >
                                        Delete
                                    </button>


                                </div>


                            </div>


                        ))}


                    </div>


                </div>


            </section>


        </MainLayout>

    );
}