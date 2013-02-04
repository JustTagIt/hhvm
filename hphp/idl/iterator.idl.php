<?php
/**
 * Automatically generated by running "php schema.php iterator".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator___construct",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "iterator",
        'type'   => Resource,
      ),
      array(
        'name'   => "mode",
        'type'   => Int64,
      ),
      array(
        'name'   => "flags",
        'type'   => Int64,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator_getinneriterator",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator_current",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator_key",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator_next",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator_rewind",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursiveiteratoriterator_valid",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator___construct",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "path",
        'type'   => String,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_key",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_next",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_rewind",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_seek",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "position",
        'type'   => Int64,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_current",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator___tostring",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_valid",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_directoryiterator_isdot",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator___construct",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "path",
        'type'   => String,
      ),
      array(
        'name'   => "flags",
        'type'   => Int64,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_key",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_next",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_rewind",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_seek",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "position",
        'type'   => Int64,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_current",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator___tostring",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_valid",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_haschildren",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_getchildren",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_getsubpath",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "hphp_recursivedirectoryiterator_getsubpathname",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
    'taint_observer' => false,
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

BeginClass(
  array(
    'name'   => "MutableArrayIterator",
    'bases'  => array('Sweepable'),
    'desc'   => "Data structure used by the runtime to deal with mutable ".
                "iteration inside yield generators.",
    'flags'  => HasDocComment | NoDefaultSweep,
    'footer' => <<<EOT

  public: union {
    char m_u[sizeof(MArrayIter)];
    TypedValue m_align;
  };
  public: bool m_valid;

  private: MArrayIter& marr() {
    return *(MArrayIter*)(m_u);
  }
EOT
,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "array",
        'type'   => Variant | Reference,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "currentRef",
    'return' => array(
      'type'   => Variant | Reference,
    ),
  ));

DefineFunction(
  array(
    'name'   => "current",
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "key",
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "next",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "valid",
    'return' => array(
      'type'   => Boolean,
    ),
  ));

EndClass(
);

