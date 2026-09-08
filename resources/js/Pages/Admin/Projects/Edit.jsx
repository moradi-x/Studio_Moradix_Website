import MainLayout from "../../../Layouts/MainLayout";
import { useForm } from "@inertiajs/react";


export default function Edit({project}) {


    const {data,setData,put} = useForm({

        title: project.title,
        description: project.description,
        image: project.image ?? "",
        technology: project.technology ?? ""

    });



    function submit(e){

        e.preventDefault();

        put(`/admin/projects/${project.id}`);

    }



    return (

        <MainLayout>

            <section className="px-8 py-24">

                <div className="max-w-3xl mx-auto">


                    <h1 className="text-5xl font-bold mb-12">
                        Edit Project
                    </h1>



                    <form onSubmit={submit} className="space-y-6">


                        <input
                            className="w-full border rounded-xl p-4"
                            value={data.title}
                            onChange={e=>setData("title",e.target.value)}
                        />


                        <textarea
                            className="w-full border rounded-xl p-4 h-40"
                            value={data.description}
                            onChange={e=>setData("description",e.target.value)}
                        />


                        <input
                            className="w-full border rounded-xl p-4"
                            value={data.image}
                            onChange={e=>setData("image",e.target.value)}
                        />


                        <input
                            className="w-full border rounded-xl p-4"
                            value={data.technology}
                            onChange={e=>setData("technology",e.target.value)}
                        />


                        <button className="bg-black text-white px-8 py-4 rounded-full">
                            Update
                        </button>


                    </form>


                </div>

            </section>


        </MainLayout>

    );
}