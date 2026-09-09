import AdminLayout from "../../../Layouts/AdminLayout";
import { useForm } from "@inertiajs/react";

export default function Edit({ project }) {


    const {
        data,
        setData,
        post,
        processing,
        errors
    } = useForm({

        _method: "PUT",

        title: project.title ?? "",
        description: project.description ?? "",

        image: null,

        technology: project.technology ?? "",
        client: project.client ?? "",
        category: project.category ?? "",

        demo_url: project.demo_url ?? "",
        github_url: project.github_url ?? "",

        content: project.content ?? "",

    });



    function submit(e) {

        e.preventDefault();


        post(`/admin/projects/${project.id}`, {

            forceFormData: true,

        });

    }



    return (

        <AdminLayout>

            <section className="px-8 py-24">

                <div className="max-w-3xl mx-auto">


                    <h1 className="text-5xl font-bold mb-12">
                        Edit Project
                    </h1>



                    <form
                        onSubmit={submit}
                        className="space-y-8"
                        encType="multipart/form-data"
                    >


                        <div>

                            <label className="block mb-2 font-medium">
                                Project Title *
                            </label>


                            <input

                                className="w-full border rounded-xl p-4"

                                placeholder="Example: Moradix Website"

                                value={data.title}

                                onChange={e =>
                                    setData(
                                        "title",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.title && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.title}

                                </p>

                            )}

                        </div>




                        <div>

                            <label className="block mb-2 font-medium">
                                Description *
                            </label>


                            <textarea

                                className="w-full border rounded-xl p-4 h-40"

                                placeholder="Short project description..."

                                value={data.description}

                                onChange={e =>
                                    setData(
                                        "description",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.description && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.description}

                                </p>

                            )}

                        </div>




                        {
                            project.image && (

                                <div>

                                    <label className="block mb-2 font-medium">
                                        Current Image
                                    </label>


                                    <img

                                        src={`/storage/${project.image}`}

                                        className="w-full h-64 object-cover rounded-xl"

                                    />

                                </div>

                            )
                        }



                        <div>

                            <label className="block mb-2 font-medium">
                                Upload New Image
                            </label>


                            <input

                                type="file"

                                className="w-full border rounded-xl p-4"

                                onChange={e =>
                                    setData(
                                        "image",
                                        e.target.files[0]
                                    )
                                }

                            />


                            {errors.image && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.image}

                                </p>

                            )}

                        </div>
                        <div>

                            <label className="block mb-2 font-medium">
                                Technology
                            </label>


                            <input

                                className="w-full border rounded-xl p-4"

                                placeholder="Laravel, React, Tailwind CSS"

                                value={data.technology || ""}

                                onChange={e =>
                                    setData(
                                        "technology",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.technology && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.technology}

                                </p>

                            )}

                        </div>




                        <div>

                            <label className="block mb-2 font-medium">
                                Client
                            </label>


                            <input

                                className="w-full border rounded-xl p-4"

                                placeholder="Client name"

                                value={data.client || ""}

                                onChange={e =>
                                    setData(
                                        "client",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.client && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.client}

                                </p>

                            )}

                        </div>




                        <div>

                            <label className="block mb-2 font-medium">
                                Category
                            </label>


                            <input

                                className="w-full border rounded-xl p-4"

                                placeholder="Website, App, Branding..."

                                value={data.category || ""}

                                onChange={e =>
                                    setData(
                                        "category",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.category && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.category}

                                </p>

                            )}

                        </div>




                        <div>

                            <label className="block mb-2 font-medium">
                                Demo URL
                            </label>


                            <input

                                type="text"

                                className="w-full border rounded-xl p-4"

                                placeholder="https://example.com"

                                value={data.demo_url || ""}

                                onChange={e =>
                                    setData(
                                        "demo_url",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.demo_url && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.demo_url}

                                </p>

                            )}

                        </div>




                        <div>

                            <label className="block mb-2 font-medium">
                                Github URL
                            </label>


                            <input

                                type="text"

                                className="w-full border rounded-xl p-4"

                                placeholder="https://github.com/user/project"

                                value={data.github_url || ""}

                                onChange={e =>
                                    setData(
                                        "github_url",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.github_url && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.github_url}

                                </p>

                            )}

                        </div>




                        <div>

                            <label className="block mb-2 font-medium">
                                Full Content
                            </label>


                            <textarea

                                className="w-full border rounded-xl p-4 h-64"

                                placeholder="Detailed project information..."

                                value={data.content || ""}

                                onChange={e =>
                                    setData(
                                        "content",
                                        e.target.value
                                    )
                                }

                            />


                            {errors.content && (

                                <p className="text-red-500 text-sm mt-2">

                                    {errors.content}

                                </p>

                            )}

                        </div>




                        <button

                            type="submit"

                            disabled={processing}

                            className="bg-black text-white px-8 py-4 rounded-full disabled:opacity-50"

                        >

                            {
                                processing
                                    ? "Saving..."
                                    : "Update Project"
                            }


                        </button>



                    </form>


                </div>

            </section>


        </AdminLayout>

    );

}