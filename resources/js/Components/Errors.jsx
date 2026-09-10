export default function Errors({ errors }) {


    if (!errors || Object.keys(errors).length === 0) {
        return null;
    }


    return (

        <div className="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-5">


            <ul className="mb-0">


                {Object.values(errors).map((error, index) => (

                    <li
                        key={index}
                    >
                        {error}
                    </li>

                ))}


            </ul>


        </div>

    );

}