import MainLayout from "../Layouts/MainLayout";
import {useForm} from "@inertiajs/react";


export default function Contact(){


    const {data,setData,post,reset} = useForm({

        name:"",
        email:"",
        message:""

    });



    function submit(e){

        e.preventDefault();

        post("/contact",{
            onSuccess:()=>reset()
        });

    }



    return (

        <MainLayout>


            <section className="px-8 py-24">

                <div className="max-w-3xl mx-auto">


                    <h1 className="text-5xl font-bold">
                        Start a Project
                    </h1>


                    <p className="mt-6 text-xl">
                        Tell us about your idea and let's build something great.
                    </p>



                    <form
                        onSubmit={submit}
                        className="mt-12 space-y-6"
                    >


                        <input
                            className="w-full border rounded-xl p-4"
                            placeholder="Name"
                            value={data.name}
                            onChange={e=>setData("name",e.target.value)}
                        />


                        <input
                            className="w-full border rounded-xl p-4"
                            placeholder="Email"
                            value={data.email}
                            onChange={e=>setData("email",e.target.value)}
                        />


                        <textarea
                            className="w-full border rounded-xl p-4 h-40"
                            placeholder="Project details"
                            value={data.message}
                            onChange={e=>setData("message",e.target.value)}
                        />


                        <button
                            className="bg-black text-white px-8 py-4 rounded-full"
                        >
                            Send Message
                        </button>


                    </form>


                </div>

            </section>


        </MainLayout>

    );
}