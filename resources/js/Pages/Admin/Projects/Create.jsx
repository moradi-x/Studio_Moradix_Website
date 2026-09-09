import AdminLayout from "../../../Layouts/AdminLayout";
import { useForm } from "@inertiajs/react";
import ValidationErrors from "../../../Components/ValidationErrors";

export default function Create() {
    const {
        data,
        setData,
        post,
        processing,
        errors,
    } = useForm({
        title: "",
        description: "",
        image: null,
        technology: "",
        client: "",
        category: "",
        demo_url: "",
        github_url: "",
        content: "",
    });

    function submit(e) {
        e.preventDefault();

        post("/admin/projects", {
            forceFormData: true,
        });
    }

    return (
        <AdminLayout>
            <section className="px-8 py-24">
                <div className="max-w-3xl mx-auto">

                    <h1 className="text-5xl font-bold mb-12">
                        Create Project
                    </h1>

                    <ValidationErrors errors={errors} />

                    <form
                        onSubmit={submit}
                        encType="multipart/form-data"
                        className="space-y-8"
                    >

                        {/* Title */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Project Title *
                            </label>

                            <input
                                type="text"
                                value={data.title}
                                onChange={(e) =>
                                    setData("title", e.target.value)
                                }
                                placeholder="Enter project title"
                                className="w-full border rounded-xl p-4"
                            />

                            {errors.title && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.title}
                                </p>
                            )}
                        </div>

                        {/* Description */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Short Description *
                            </label>

                            <textarea
                                value={data.description}
                                onChange={(e) =>
                                    setData("description", e.target.value)
                                }
                                placeholder="Write a short description about this project"
                                className="w-full border rounded-xl p-4 h-40"
                            />

                            {errors.description && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.description}
                                </p>
                            )}
                        </div>

                        {/* Image */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Project Image
                            </label>

                            <input
                                type="file"
                                accept="image/*"
                                onChange={(e) =>
                                    setData(
                                        "image",
                                        e.target.files[0] || null
                                    )
                                }
                                className="w-full border rounded-xl p-4"
                            />

                            <p className="text-sm text-gray-500 mt-2">
                                Recommended: JPG, PNG or WEBP. Max 2MB.
                            </p>

                            {errors.image && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.image}
                                </p>
                            )}
                        </div>

                        {/* Technology */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Technology
                            </label>

                            <input
                                type="text"
                                value={data.technology}
                                onChange={(e) =>
                                    setData("technology", e.target.value)
                                }
                                placeholder="e.g. Laravel, React, Tailwind CSS"
                                className="w-full border rounded-xl p-4"
                            />

                            {errors.technology && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.technology}
                                </p>
                            )}
                        </div>

                        {/* Client */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Client
                            </label>

                            <input
                                type="text"
                                value={data.client}
                                onChange={(e) =>
                                    setData("client", e.target.value)
                                }
                                placeholder="e.g. Acme Corporation"
                                className="w-full border rounded-xl p-4"
                            />

                            {errors.client && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.client}
                                </p>
                            )}
                        </div>

                        {/* Category */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Category
                            </label>

                            <input
                                type="text"
                                value={data.category}
                                onChange={(e) =>
                                    setData("category", e.target.value)
                                }
                                placeholder="e.g. Web Development"
                                className="w-full border rounded-xl p-4"
                            />

                            {errors.category && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.category}
                                </p>
                            )}
                        </div>

                        {/* Demo URL */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Demo URL
                            </label>

                            <input
                                type="text"
                                value={data.demo_url}
                                onChange={(e) =>
                                    setData("demo_url", e.target.value)
                                }
                                placeholder="https://example.com"
                                className="w-full border rounded-xl p-4"
                            />

                            {errors.demo_url && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.demo_url}
                                </p>
                            )}
                        </div>

                        {/* Github URL */}
                        <div>
                            <label className="block mb-2 font-medium">
                                GitHub URL
                            </label>

                            <input
                                type="text"
                                value={data.github_url}
                                onChange={(e) =>
                                    setData("github_url", e.target.value)
                                }
                                placeholder="https://github.com/username/project"
                                className="w-full border rounded-xl p-4"
                            />

                            {errors.github_url && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.github_url}
                                </p>
                            )}
                        </div>

                        {/* Full Content */}
                        <div>
                            <label className="block mb-2 font-medium">
                                Full Project Content
                            </label>

                            <textarea
                                value={data.content}
                                onChange={(e) =>
                                    setData("content", e.target.value)
                                }
                                placeholder="Write the full project details, features, challenges, process, technologies, etc."
                                className="w-full border rounded-xl p-4 h-64"
                            />

                            {errors.content && (
                                <p className="text-red-500 text-sm mt-2">
                                    {errors.content}
                                </p>
                            )}
                        </div>

                        {/* Submit */}
                        <div className="pt-4">
                            <button
                                type="submit"
                                disabled={processing}
                                className="bg-black text-white px-8 py-4 rounded-full disabled:opacity-50"
                            >
                                {processing
                                    ? "Saving..."
                                    : "Save Project"}
                            </button>
                        </div>

                    </form>
                </div>
            </section>
        </AdminLayout>
    );
}