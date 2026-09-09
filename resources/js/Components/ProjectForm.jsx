function ErrorMessage({ message }) {
    if (!message) return null;

    return (
        <p className="text-red-500 text-sm mt-2">
            {message}
        </p>
    );
}


export default function ProjectForm({
    data,
    setData,
    submit,
    processing,
    project,
    errors = {}
}) {

    return (
        <form

            onSubmit={(e) => {
                e.preventDefault();
                submit(e);
            }}
            encType="multipart/form-data"
            className="space-y-8"
        >

            <div>
                <label className="block mb-2 font-medium">
                    Project Title *
                </label>

                <input
                    className="w-full border rounded-xl p-4"
                    value={data.title}
                    onChange={e =>
                        setData("title", e.target.value)
                    }
                />

                <ErrorMessage message={errors.title} />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Description *
                </label>

                <textarea
                    className="w-full border rounded-xl p-4 h-40"
                    value={data.description}
                    onChange={e =>
                        setData("description", e.target.value)
                    }
                />

                <ErrorMessage message={errors.description} />
            </div>


            {project?.image && (
                <div>
                    <label className="block mb-2 font-medium">
                        Current Image
                    </label>

                    <img
                        src={`/storage/${project.image}`}
                        className="w-full h-64 object-cover rounded-xl"
                    />
                </div>
            )}


            <div>
                <label className="block mb-2 font-medium">
                    Upload Image
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

                <ErrorMessage message={errors.image} />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Technology
                </label>

                <input
                    className="w-full border rounded-xl p-4"
                    value={data.technology || ""}
                    onChange={e =>
                        setData(
                            "technology",
                            e.target.value
                        )
                    }
                />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Client
                </label>

                <input
                    className="w-full border rounded-xl p-4"
                    value={data.client || ""}
                    onChange={e =>
                        setData(
                            "client",
                            e.target.value
                        )
                    }
                />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Category
                </label>

                <input
                    className="w-full border rounded-xl p-4"
                    value={data.category || ""}
                    onChange={e =>
                        setData(
                            "category",
                            e.target.value
                        )
                    }
                />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Demo URL
                </label>

                <input
                    className="w-full border rounded-xl p-4"
                    value={data.demo_url || ""}
                    onChange={e =>
                        setData(
                            "demo_url",
                            e.target.value
                        )
                    }
                />

                <ErrorMessage message={errors.demo_url} />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Github URL
                </label>

                <input
                    className="w-full border rounded-xl p-4"
                    value={data.github_url || ""}
                    onChange={e =>
                        setData(
                            "github_url",
                            e.target.value
                        )
                    }
                />

                <ErrorMessage message={errors.github_url} />
            </div>


            <div>
                <label className="block mb-2 font-medium">
                    Full Content
                </label>

                <textarea
                    className="w-full border rounded-xl p-4 h-64"
                    value={data.content || ""}
                    onChange={e =>
                        setData(
                            "content",
                            e.target.value
                        )
                    }
                />
            </div>


            <button
                type="submit"
                disabled={processing}
                className="bg-black text-white px-8 py-4 rounded-full disabled:opacity-50"
            >
                {
                    processing
                        ? "Saving..."
                        : "Save Project"
                }
            </button>


        </form>
    );
}