import MainLayout from "../../../Layouts/MainLayout";
import { useForm } from "@inertiajs/react";

export default function Create() {


    const { data, setData, post } = useForm({

        title: "",
        description: "",
        image: null,
        technology: ""

    });



    function submit(e) {

        e.preventDefault();

        post("/admin/projects", {
            forceFormData: true,
        });
    }



    return (

        <MainLayout>


            <section className="px-8 py-24">


                <div className="max-w-3xl mx-auto">


                    <h1 className="text-5xl font-bold mb-12">
                        Create Project
                    </h1>



                    <form
                        onSubmit={submit}
                        encType="multipart/form-data"

                        className="space-y-6"
                    >


                        <input

                            className="w-full border rounded-xl p-4"

                            placeholder="Project title"

                            value={data.title}

                            onChange={e => setData("title", e.target.value)}

                        />



                        <textarea

                            className="w-full border rounded-xl p-4 h-40"

                            placeholder="Description"

                            value={data.description}

                            onChange={e => setData("description", e.target.value)}

                        />



                        <input

                            type="file"

                            className="w-full border rounded-xl p-4"

                            onChange={e => setData("image", e.target.files[0])}

                        />



                        <input

                            className="w-full border rounded-xl p-4"

                            placeholder="Technology"

                            value={data.technology}

                            onChange={e => setData("technology", e.target.value)}

                        />



                        <button

                            className="bg-black text-white px-8 py-4 rounded-full"

                        >
                            Save Project

                        </button>


                    </form>


                </div>


            </section>


        </MainLayout>

    );
}